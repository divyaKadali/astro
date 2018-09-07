<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PredictionbyplanetraasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prediction By Planet Raasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-by-planet-raasi-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Prediction By Planet Raasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //  'pprId',
            'position_id',
            'Moon:ntext',
            'Jupiter:ntext',
            'Mercury:ntext',
            //'Sun:ntext',
            //'Mars:ntext',
            //'Venus:ntext',
            //'Saturn:ntext',
            //'Rahu:ntext',
            //'Ketu:ntext',

             ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update}',
            		'buttons' => [
            				'view' => function ($url,$data) {
            				$url = Url::to(['/predictionbyplanetraasi/view','id'=>$data->pprId]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url,['title'=>'view']);
            				 
            				},
            				
            				'update' => function ($url,$data) {
            				$url = Url::to(['/predictionbyplanetraasi/update','id'=>$data->pprId]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-pencil"></span>',
            						$url,['title'=>'update']);
            				 
            				},
            		]
        		],
        ],
    ]); ?>
</div>
</div></div>
