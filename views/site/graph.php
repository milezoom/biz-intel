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
            'title' => ['text' => 'Fruit Consumption'],
            'xAxis' => [
                'categories' => ['Apples', 'Bananas', 'Oranges']
            ],
            'yAxis' => [
                'title' => ['text' => 'Fruit eaten']
            ],
            'series' => [
                ['name' => 'Jane', 'data' => [1, 0, 4]],
                ['name' => 'John', 'data' => [5, 7, 3]]
            ],            
        ],
        'scripts' => [
            'themes/dark-unica'
        ]
    ]);
    ?>
</div>