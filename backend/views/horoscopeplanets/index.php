<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\User;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\HoroscopeplanetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Horoscope Planets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscope-planets-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Horoscope Planets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'horoplanetId',
           ['attribute' => 'userid',
           	'value'=> function ($model)
           		{
        	$userInfo = User::find()->where(['id' => $model->userid])->one();
        	return $userInfo->username;
        }
        ],
            'planet',
            'digrees',
            'strength',
            //'nakshatram',
            //'rashiname',
            //'lagnaLord',
            //'dhanaLord',
            //'kutumbaLord',
            //'maatruLord',
            //'putraLord',
            //'shetruLord',
            //'kalatraLord',
            //'shatruLord',
            //'bhaagyaLord',
            //'raajayLord',
            //'laabhaLord',
            //'vyayaLord',
            //'userid',

             ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update} {delete} ',
            		'buttons' => [
            				'view' => function ($url,$data) {
            				$url = Url::to(['/horoscopeplanets/view','id'=>$data->userid]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url,['title'=>'view']);
            				 
            				},
            				
            				'update' => function ($url,$data) {
            				$url = Url::to(['/horoscopeplanets/update','id'=>$data->userid]);
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
</div></div>
