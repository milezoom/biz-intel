<?php
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
$this->title = 'Awareness';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-keuntungan">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php    
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => 'Awareness Berdasarkan Jenis Kelamin'],
            'xAxis' => [
                'title' => ['text' => 'Jenis Kelamin'],
                'categories' => $jenis_kelamin
            ],
            'yAxis' => [
                'title' => ['text' => 'data']
            ],
            'series' => [
                [
                    'type' => 'column',
                    'data' => [$awareYaLk,$awareYaPr],
                    'name' => 'Tahu',
                    'showInLegend' => false,
                ],
                [
                    'type' => 'column',
                    'data' => [$awareTdLk,$awareTdPr],
                    'name' => 'Tidak',
                    'showInLegend' => false,
                ],
            ],            
        ],
        'scripts' => [
            'themes/gray'
        ]
    ]);

    echo "<br/><br/><br/>";

    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => 'Awareness Berdasarkan Daerah'],
            'xAxis' => [
                'title' => ['text' => 'Daerah Asal'],
                'categories' => $daerah
            ],
            'yAxis' => [
                'title' => ['text' => 'data']
            ],
            'series' => [
                [
                    'type' => 'column',
                    'data' => [$awareYaBali,$awareYaBdg,$awareYaSolo,$awareYaPdg,
                               $awareYaDpk,$awareYaLmk,$awareYaJkt,$awareYaPbg,
                               $awareYaTgr,$awareYaSby,$awareYaAceh,$awareYaBks,
                               $awareYaBgr,$awareYaMdn,$awareYaJgk],
                    'name' => 'Tahu',
                    'showInLegend' => false,
                ],
                [
                    'type' => 'column',
                    'data' => [$awareTdBali,$awareTdBdg,$awareTdSolo,$awareTdPdg,
                               $awareTdDpk,$awareTdLmk,$awareTdJkt,$awareTdPbg,
                               $awareTdTgr,$awareTdSby,$awareTdAceh,$awareTdBks,
                               $awareTdBgr,$awareTdMdn,$awareTdJgk],
                    'name' => 'Tidak',
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