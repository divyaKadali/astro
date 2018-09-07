<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use backend\models\DailyPlanets;
$model = new DailyPlanets;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DailyplanetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planet Transistion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Planet Transistion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'dpId',
          //  'planet_date',
        		
        				[
        				'attribute' => 'planet_date',
        				'value' => function ($model, $key, $index, $widget) {
        				return date(" D , d-M-Y g:i:s A", strtotime($model->planet_date));
        				},
        				],
        		//Yii::$app->formatter->asDatetime('planet_date'),
            'Moon:ntext',
            'Jupiter:ntext',
            'Mercury:ntext',
            //'Sun:ntext',
            //'Mars:ntext',
            //'Venus:ntext',
            //'Saturn:ntext',
            //'Rahu:ntext',
            //'Ketu:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        		]
    ]); ?>
   </div>
</div>
</div>
 
    
