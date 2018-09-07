<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PlanetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php //Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Planets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'planetId',
            'planetName',
            'direction',
            'organs:ntext',
            //'diceases:ntext',
            //'gemStone:ntext',
            //'dhaanam:ntext',
            //'characterstic:ntext',
            //'kaaraka:ntext',
            //'createdBy',
            //'updatedBy',
            //'createdDate',
            //'updatedDate',
        		['class' => 'yii\grid\ActionColumn',
        		'template' => '{view} {update}',
        		'buttons' => [
        				'view' => function ($url,$data) {
        				$url = Url::to(['/planets/view','id'=>$data->planetId]);
        				return Html::a(
        						'<span class="glyphicon glyphicon-eye-open"></span>',
        						$url,['title'=>'view']);
        				},
        				'update' => function ($url,$data) {
        				$url = Url::to(['/planets/update','id'=>$data->planetId]);
        				return Html::a(
        						'<span class="glyphicon glyphicon-pencil"></span>',
        						$url,['title'=>'update']);
        				},
        				]
        				],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
</div>
</div>
