<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PlanetspositionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Gochara_Phalam';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-positions-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create  Gochara_Phalam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'ppId',
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
        				$url = Url::to(['/planetspositions/view','id'=>$data->ppId]);
        				return Html::a(
        						'<span class="glyphicon glyphicon-eye-open"></span>',
        						$url,['title'=>'view']);
        				},
        				'update' => function ($url,$data) {
        				$url = Url::to(['/planetspositions/update','id'=>$data->ppId]);
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
<style>
.grid-view td {
    max-width: 100px;
    overflow: auto; /* optional */
    word-wrap: break-word;
}
</style>