<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LagnaresultsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lagna Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-lord-in-other-lord-raasis-index">
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php //Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Lagna Results', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'lagnaresult_id',
            'rashi_name',
            'information:ntext',

            ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update}',
            		'buttons' => [
            				'view' => function ($url,$data) {
            				$url = Url::to(['/lagnaresults/view','id'=>$data->lagnaresult_id]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url,['title'=>'view']);
            				 
            				},
            				
            				'update' => function ($url,$data) {
            				$url = Url::to(['/lagnaresults/update','id'=>$data->lagnaresult_id]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-pencil"></span>',
            						$url,['title'=>'update']);
            				 
            				},
            		]
        		],
        ],
    ]); ?>
</div>