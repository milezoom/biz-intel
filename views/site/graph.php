<?php
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
$this->title = 'Keuntungan';
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
                'title' => ['text' => 'Banyak Pendapatan (dalam Rupiah)']
            ],
            'series' => [
                [
                    'type' => 'column',
                    'data' => $pendapatan,
                    'name' => 'Pendapatan Tokomedia',
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
            'themes/gray'
        ]
    ]);
    ?>
</div>