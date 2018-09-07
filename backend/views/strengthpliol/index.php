<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StrengthPliolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Strenght Prediction Lord In Other Lords';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-lord-in-other-lord-raasis-index">
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Strenght Predictionlordinotherlord', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'splord_rasiid',
            'lord',
            'position1:ntext',
            'position2:ntext',
            'position3:ntext',
            //'position4:ntext',
            //'position5:ntext',
            //'position6:ntext',
            //'position7:ntext',
            //'position8:ntext',
            //'position9:ntext',
            //'position10:ntext',
            //'position11:ntext',
            //'position12:ntext',

            
        		['class' => 'yii\grid\ActionColumn',
        		'template' => '{view} {update}',
        		'buttons' => [
        				'view' => function ($url,$data) {
        				$url = Url::to(['/strengthpliol/view','id'=>$data->splord_rasiid]);
        				return Html::a(
        						'<span class="glyphicon glyphicon-eye-open"></span>',
        						$url,['title'=>'view']);
        				 
        				},
        		
        				'update' => function ($url,$data) {
        				$url = Url::to(['/strengthpliol/update','id'=>$data->splord_rasiid]);
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
