<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
$this->title = 'Performa SDM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-performance">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $banyakOrang = array();

    foreach($divisi as $data){
        array_push($banyakOrang,count(($listSDM[$data])));
    }

    $dataPie1 = array();
    for ($x = 0; $x < count($divisi); $x++){
        array_push($dataPie1,[$divisi[$x],$banyakOrang[$x]]);
    }

    $dataPie2 = array();
    array_push($dataPie2,["kurang dari 6 bulan",$countLamaKerja["<6"]]);
    array_push($dataPie2,["antara 6 - 12 bulan",$countLamaKerja["6-12"]]);
    array_push($dataPie2,["lebih dari 12 bulan",$countLamaKerja[">12"]]); 

    $selectedCriterion = "performa";

    $dataColumnNilai = array();
    foreach($listSDM[$selectedDivision] as $data){
        array_push($dataColumnNilai,$data[$selectedCriterion]);
    }

    $dataColumnNama = array();
    foreach($listSDM[$selectedDivision] as $data){
        array_push($dataColumnNama,$data["nama"]);
    }
    sort($dataColumnNama);
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                echo Highcharts::widget([
                    'options' => [
                        'title' => ['text' => 'Banyak Karyawan Berdasarkan Divisi'],
                        'series' => [
                            [
                                'type' => 'pie',
                                'data' => $dataPie1,
                                'name' => 'Banyak Karyawan',
                            ],
                        ],            
                    ],
                    'scripts' => [
                        'themes/gray'
                    ]
                ]);
                ?>
            </div>
            <div class="col-md-6">
                <?php
                echo Highcharts::widget([
                    'options' => [
                        'title' => ['text' => 'Banyak Karyawan Berdasarkan LamaKerja'],
                        'series' => [
                            [
                                'type' => 'pie',
                                'data' => $dataPie2,
                                'name' => 'Banyak Karyawan',
                            ],
                        ],            
                    ],
                    'scripts' => [
                        'themes/gray'
                    ]
                ]);
                ?>
            </div>
        </div>
        <br/><br/><br/>
        <div class="row">
            <?php
                echo Highcharts::widget([
                    'options' => [
                        'title' => ['text' => 'Penilaian '.$selectedCriterion.' Karyawan dari divisi '.$selectedDivision],
                        'xAxis' => [
                            'title' => ['text' => 'Nama Karyawan'],
                            'categories' => $dataColumnNama
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'Nilai (0 - 100)']
                        ],
                        'series' => [
                            [
                                'type' => 'column',
                                'data' => $dataColumnNilai,
                                'name' => 'Nilai',
                                'showInLegend' => false
                            ],
                            [
                                'type' => 'spline',
                                'data' => $dataColumnNilai,
                                'showInLegend' => false,
                            ],
                        ],
                    ],
                    'scripts' => [
                        'themes/gray'
                    ]
                ]);
                ?>
        </div>
    </div>    
</div>