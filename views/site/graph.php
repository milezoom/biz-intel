<?php
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
$this->title = 'Graph';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => 'Keuntungan Tokomedia'],
            'xAxis' => [
                'title' => ['text' => 'Tahun'],
                'categories' => $tahun
            ],
            'yAxis' => [
                'title' => ['text' => 'Banyak Pendapatan']
            ],
            'series' => [
                [
                    'type' => 'column',
                    'data' => $pendapatan,
                    'showInLegend' => false,
                ],
                [
                    'type' => 'spline',
                    'data' => $pendapatan,
                    'showInLegend' => false,
                ],
            ],            
        ],
        'scripts' => [
            'themes/sand-signika'
        ]
    ]);
    ?>
</div>