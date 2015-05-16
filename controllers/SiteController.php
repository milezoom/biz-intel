<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UploadForm;
use app\models\Keuntungan;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionGraph()
    {
        $keuntungan = Keuntungan::find()->all();
        $tahun = [];
        $pendapatan = [];
        foreach ($keuntungan as $data){
            array_push($tahun,$data->tahun);
            array_push($pendapatan,$data->pendapatan);
        }

        return $this->render('graph',[
            'tahun' => $tahun,
            'pendapatan' => $pendapatan,
        ]);
    }

    public function actionUpload()
    {
        $model = new UploadForm();


        if(Yii::$app->request->isPost){
            $model->file = UploadedFile::getInstance($model, 'file');

            if($model->file && $model->validate()){
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                $this::actionWriteToDatabase();
                return $this->redirect(['graph']);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionWriteToDatabase()
    {
        $location = glob(Yii::getAlias('@realdir')."/web/uploads/*.csv")[0];
        $file = fopen($location, "r");

        $counter = 0;
        while(! feof($file))
        {
            if ($counter > 0) {
                $data = fgetcsv($file);
                $model = new Keuntungan();
                $model->tahun = $data[0];
                $model->pendapatan = $data[1];
                $model->save();
            }

            $counter = $counter + 1;
        }

        fclose($file);

        unlink($location);
    }
}
