<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GochaaramplanetcolorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gochaaram Planet Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-by-planet-raasi-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php //Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Gochaaram Planet Color', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'g_plcId',
        	'planets',
            'sun',
            'moon',
            'mars',
            'mercury',
            //'jupiter',
            //'venus',
            //'saturn',

            ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update}',
            		'buttons' => [
            				'view' => function ($url,$data) {
            				$url = Url::to(['/gochaaramplanetcolor/view','id'=>$data->g_plcId]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url,['title'=>'view']);
            				 
            				},
            				
            				'update' => function ($url,$data) {
            				$url = Url::to(['/gochaaramplanetcolor/update','id'=>$data->g_plcId]);
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
