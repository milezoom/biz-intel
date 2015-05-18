<?php
use yii\helpers\Html;
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
    ?>
    <div class="container row">
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
</div>