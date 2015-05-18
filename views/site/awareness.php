<?php
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use app\models\Awareness;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
$model = new Awareness();
$this->title = 'Awareness';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-keuntungan">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'awal')->dropDownList(
        arrayHelper::map(Awareness::find()->all(), 'umur', 'umur'),
        ['prompt'=>'Pilih Tahun']
    ) ?>

    <?= $form->field($model, 'akhir')->dropDownList(
        arrayHelper::map(Awareness::find()->all(), 'umur', 'umur'),
        ['prompt'=>'Pilih Tahun']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php   
    
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => 'Awareness Berdasarkan Jenis Kelamin'.$range.''],
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
                    'data' => [(int) $awareYaLk,(int) $awareYaPr],
                    'name' => 'Tahu',
                    'showInLegend' => false,
                ],
                [
                    'type' => 'column',
                    'data' => [(int) $awareTdLk,(int) $awareTdPr],
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
            'title' => ['text' => 'Awareness Berdasarkan Daerah'.$range.''],
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
                    'data' => [(int) $awareYaBali,(int) $awareYaBdg,(int) $awareYaSolo,(int) $awareYaPdg,
                               (int) $awareYaDpk,(int) $awareYaLmk,(int) $awareYaJkt,(int) $awareYaPbg,
                               (int) $awareYaTgr,(int) $awareYaSby,(int) $awareYaAceh,(int) $awareYaBks,
                               (int) $awareYaBgr,(int) $awareYaMdn,(int) $awareYaJgk],
                    'name' => 'Tahu',
                    'showInLegend' => false,
                ],
                [
                    'type' => 'column',
                    'data' => [(int) $awareTdBali,(int) $awareTdBdg,(int) $awareTdSolo,(int) $awareTdPdg,
                               (int) $awareTdDpk,(int) $awareTdLmk,(int) $awareTdJkt,(int) $awareTdPbg,
                               (int) $awareTdTgr,(int) $awareTdSby,(int) $awareTdAceh,(int) $awareTdBks,
                               (int) $awareTdBgr,(int) $awareTdMdn,(int) $awareTdJgk],
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