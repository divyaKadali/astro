<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PredictionLordInOtherLordRaasisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prediction Lord In Other Lord Rasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-lord-in-other-lord-raasis-index">
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Prediction Lord In Other Lord Rasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'plord_rasiid',
            'lord',
            'position1',
            'position2',
            'position3',
            //'position4',
            //'position5',
            //'position6',
            //'position7',
            //'position8',
            //'position9',
            //'position10',
            //'position11',
            //'position12',

             ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update}',
            		'buttons' => [
            				'view' => function ($url,$data) {
            				$url = Url::to(['/predictionlardrasi/view','id'=>$data->plord_rasiid]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url,['title'=>'view']);
            				 
            				},
            				
            				'update' => function ($url,$data) {
            				$url = Url::to(['/predictionlardrasi/update','id'=>$data->plord_rasiid]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-pencil"></span>',
            						$url,['title'=>'update']);
            				 
            				},
            		]
        		],
        ],
    ]); ?>
</div>
</div>
</div>
</div>
<style>
.grid-view td {
    max-width: 100px;
    overflow: auto; /* optional */
    word-wrap: break-word;
}
</style>
