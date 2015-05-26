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
use app\models\PerformanceSearch;
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
        $model = new Awareness();
        if($model->load(Yii::$app->request->post())){
            $awareYaLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareYaJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 1])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $awareTdJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 0])->andWhere('umur between '.$model->awal.' and '.$model->akhir.'')->count();
            $range = 'Pada Range Umur'.$model->awal.' sampai '.$model->akhir.'';
        }
        else{
            $awareYaLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 1])->count();
            $awareYaPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 1])->count();
            $awareTdLk = Awareness::find()->where(['jenis_kelamin' => 'laki-laki','is_know' => 0])->count();
            $awareTdPr = Awareness::find()->where(['jenis_kelamin' => 'perempuan','is_know' => 0])->count();
            $awareYaBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 1])->count();
            $awareTdBali = Awareness::find()->where(['daerah' => 'bali','is_know' => 0])->count();
            $awareYaBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 1])->count();
            $awareTdBdg = Awareness::find()->where(['daerah' => 'bandung','is_know' => 0])->count();
            $awareYaSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 1])->count();
            $awareTdSolo = Awareness::find()->where(['daerah' => 'solo','is_know' => 0])->count();
            $awareYaPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 1])->count();
            $awareTdPdg = Awareness::find()->where(['daerah' => 'padang','is_know' => 0])->count();
            $awareYaDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 1])->count();
            $awareTdDpk = Awareness::find()->where(['daerah' => 'depok','is_know' => 0])->count();
            $awareYaLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 1])->count();
            $awareTdLmk = Awareness::find()->where(['daerah' => 'lombok','is_know' => 0])->count();
            $awareYaJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 1])->count();
            $awareTdJkt = Awareness::find()->where(['daerah' => 'jakarta','is_know' => 0])->count();
            $awareYaPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 1])->count();
            $awareTdPbg = Awareness::find()->where(['daerah' => 'palembang','is_know' => 0])->count();
            $awareYaTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 1])->count();
            $awareTdTgr = Awareness::find()->where(['daerah' => 'tangerang','is_know' => 0])->count();
            $awareYaSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 1])->count();
            $awareTdSby = Awareness::find()->where(['daerah' => 'surabaya','is_know' => 0])->count();
            $awareYaAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 1])->count();
            $awareTdAceh = Awareness::find()->where(['daerah' => 'aceh','is_know' => 0])->count();
            $awareYaBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 1])->count();
            $awareTdBks = Awareness::find()->where(['daerah' => 'bekasi','is_know' => 0])->count();
            $awareYaBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 1])->count();
            $awareTdBgr = Awareness::find()->where(['daerah' => 'bogor','is_know' => 0])->count();
            $awareYaMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 1])->count();
            $awareTdMdn = Awareness::find()->where(['daerah' => 'medan','is_know' => 0])->count();
            $awareYaJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 1])->count();
            $awareTdJgk = Awareness::find()->where(['daerah' => 'jogjakarta','is_know' => 0])->count();
            $range = '';
        }
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
            'jenis_kelamin' => array("laki-laki","perempuan"),
            'range'=>$range,
        ]);
    }

    public function actionPerformance()
    {
        $model = new Performance();
        if($model->load(Yii::$app->request->post())){
            $divisi = PerformanceSearch::getListDivisi();

            $listSDMByDivisi = PerformanceSearch::getDataByDivisi();

            $countSDMByLamaKerja = PerformanceSearch::getCountByLamaKerja();

            return $this->render('performance',[
                'divisi' => $divisi,
                'listSDM' => $listSDMByDivisi,
                'countLamaKerja' => $countSDMByLamaKerja,
                'selectedDivision' => $model->div,
                'selectedCriterion' => $model->kriteria,
                'model'=>$model,

            ]);
        } else {
            $divisi = PerformanceSearch::getListDivisi();

            $listSDMByDivisi = PerformanceSearch::getDataByDivisi();

            $countSDMByLamaKerja = PerformanceSearch::getCountByLamaKerja();

            return $this->render('performance',[
                'divisi' => $divisi,
                'listSDM' => $listSDMByDivisi,
                'countLamaKerja' => $countSDMByLamaKerja,
                'selectedDivision' => "Design",
                'selectedCriterion' => "kedisiplinan",
                'model'=>$model,
            ]);
        }
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
        $connection = \Yii::$app->db;
        $counter = 0;
        if($filename == "keuntungan") {
            if($connection->createCommand("SELECT * FROM keuntungan")->queryOne() != NULL)
            {
                $connection->createCommand("DELETE FROM keuntungan")->execute();
            }

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
            if($connection->createCommand("SELECT * FROM performance")->queryOne() != NULL)
            {
                $connection->createCommand("DELETE FROM performance")->execute();
            }
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
                    $model->div='';
                    $model->kriteria='';
                    $model->save();
                }
                $counter = $counter + 1;
            }
            return $this->redirect(['performance']);
        } elseif($filename == "awareness") {
            if($connection->createCommand("SELECT * FROM awareness")->queryOne() != NULL)
            {
                $connection->createCommand("DELETE FROM awareness")->execute();
            }
            while(!feof($file)) {
                if($counter > 0) {
                    $data = fgetcsv($file);
                    $model = new Awareness();
                    $model->nama = $data[0];
                    $model->umur = $data[1];
                    $model->jenis_kelamin = $data[2];
                    $model->daerah = $data[3];
                    $model->is_know = $data[4];
                    $model->awal = 0;
                    $model->akhir = 0;
                    $model->save();
                }
                $counter = $counter + 1;
            }
            return $this->redirect(['awareness']);
        }

        fclose($file);

        unlink($location);
    }
}
