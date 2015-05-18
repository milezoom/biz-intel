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
use app\models\Performance;
use app\models\Awareness;

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

    public function actionKeuntungan()
    {
        $keuntungan = Keuntungan::find()->all();
        $tahun = [];
        $pendapatan = [];
        foreach ($keuntungan as $data){
            array_push($tahun,$data->tahun);
            array_push($pendapatan,$data->pendapatan);
        }

        return $this->render('keuntungan',[
            'tahun' => $tahun,
            'pendapatan' => $pendapatan,
        ]);
    }
    
    public function actionAwareness()
    {
        $awareYaLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 't'])->count();
        $awareYaPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 't'])->count();
        $awareTdLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 'f'])->count();
        $awareTdPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 'f'])->count();
        $awareYaBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 't'])->count();
        $awareTdBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 'f'])->count();
        $awareYaBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 't'])->count();
        $awareTdBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 'f'])->count();
        $awareYaSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 't'])->count();
        $awareTdSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 'f'])->count();
        $awareYaPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 't'])->count();
        $awareTdPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 'f'])->count();
        $awareYaDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 't'])->count();
        $awareTdDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 'f'])->count();
        $awareYaLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 't'])->count();
        $awareTdLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 'f'])->count();
        $awareYaJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 't'])->count();
        $awareTdJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 'f'])->count();
        $awareYaPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 't'])->count();
        $awareTdPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 'f'])->count();
        $awareYaTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 't'])->count();
        $awareTdTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 'f'])->count();
        $awareYaSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 't'])->count();
        $awareTdSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 'f'])->count();
        $awareYaAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 't'])->count();
        $awareTdAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 'f'])->count();
        $awareYaBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 't'])->count();
        $awareTdBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 'f'])->count();
        $awareYaBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 't'])->count();
        $awareTdBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 'f'])->count();
        $awareYaMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 't'])->count();
        $awareTdMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 'f'])->count();
        $awareYaJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 't'])->count();
        $awareTdJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 'f'])->count();
        return $this->render('awareness',[
            'awareYaLk' => $awareYaLk,
            'awareYaPr' => $awareYaPr,
            'awareTdLk' => $awareTdLk,
            'awareTdPr' => $awareTdPr,
            'awareYaBali' => $awareYaBali,
            'awareYaBdg' => $awareYaBdg,
            'awareYaSolo' => $awareYaSolo,
            'awareYaPdg' => $awareYaPdg,
            'awareYaDpk' => $awareYaDpk,
            'awareYaLmk' => $awareYaLmk,
            'awareYaJkt' => $awareYaJkt,
            'awareYaPbg' => $awareYaPbg,
            'awareYaTgr' => $awareYaTgr,
            'awareYaSby' => $awareYaSby,
            'awareYaAceh' => $awareYaAceh,
            'awareYaBks' => $awareYaBks,
            'awareYaBgr' => $awareYaBgr,
            'awareYaMdn' => $awareYaMdn,
            'awareYaJgk' => $awareYaJgk,
            'awareTdBali' => $awareTdBali,
            'awareTdBdg' => $awareTdBdg,
            'awareTdSolo' => $awareTdSolo,
            'awareTdPdg' => $awareTdPdg,
            'awareTdDpk' => $awareTdDpk,
            'awareTdLmk' => $awareTdLmk,
            'awareTdJkt' => $awareTdJkt,
            'awareTdPbg' => $awareTdPbg,
            'awareTdTgr' => $awareTdTgr,
            'awareTdSby' => $awareTdSby,
            'awareTdAceh' => $awareTdAceh,
            'awareTdBks' => $awareTdBks,
            'awareTdBgr' => $awareTdBgr,
            'awareTdMdn' => $awareTdMdn,
            'awareTdJgk' => $awareTdJgk,
            'daerah' => array(
                "bali","bandung","solo","padang",
                "depok","lombok","jakarta","palembang",
                "tangerang","surabaya","aceh","bekasi",
                "bogor","medan","jogjakarta"),
            'jenis_kelamin' => array("laki-laki","perempuan")
        ]);
    }
    
    public function actionUpload()
    {
        $model = new UploadForm();


        if(Yii::$app->request->isPost){
            $model->file = UploadedFile::getInstance($model, 'file');

            if($model->file && $model->validate()){
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                $this::actionWriteToDatabase($model->file->baseName);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionWriteToDatabase($filename)
    {
        $location = glob(Yii::getAlias('@realdir')."/web/uploads/".$filename.".csv")[0];
        $file = fopen($location, "r");

        $counter = 0;
        if($filename == "keuntungan") {
            while(!feof($file)) {
                if($counter > 0) {
                    $data = fgetcsv($file);
                    $model = new Keuntungan();
                    $model->tahun = $data[0];
                    $model->pendapatan = $data[1];
                    $model->save();
                }
                $counter = $counter + 1;
            }
            return $this->redirect(['keuntungan']);
        } elseif($filename == "performance") {
            while(!feof($file)) {
                if($counter > 0) {
                    $data = fgetcsv($file);
                    $model = new Performance();
                    $model->divisi = $data[0];
                    $model->nama = $data[1];
                    $model->jenis_pekerjaan = $data[2];
                    $model->lama_kerja = $data[3];
                    $model->performa = $data[4];
                    $model->kepemimpinan = $data[5];
                    $model->kedisiplinan = $data[6];
                    $model->time_management = $data[7];
                    $model->save();
                }
                $counter = $counter + 1;
            }
        } elseif($filename == "awareness") {
            while(!feof($file)) {
                if($counter > 0) {
                    $data = fgetcsv($file);
                    $model = new Awareness();
                    $model->nama = $data[0];
                    $model->umur = $data[1];
                    $model->jenis_kelamin = $data[2];
                    $model->daerah = $data[3];
                    $model->is_know = $data[4];
                    $model->save();
                }
                $counter = $counter + 1;
            }
        }
        
        fclose($file);

        unlink($location);
    }
}
