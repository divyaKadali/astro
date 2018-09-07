<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RashiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Raasi_Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rashi-index">

<div class="box box-primary">
<div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Raasi_Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'rashiName',
        	'lord',
          //  'description:ntext',
           
            //'createdDate',
            //'updatedDate',

            	['class' => 'yii\grid\ActionColumn',
        		'template' => '{view} {update}',
        		'buttons' => [
        				'view' => function ($url,$data) {
        				$url = Url::to(['/rashi/view','id'=>$data->rashiId]);
        				return Html::a(
        						'<span class="glyphicon glyphicon-eye-open"></span>',
        						$url,['title'=>'view']);
        				},
        				'update' => function ($url,$data) {
        				$url = Url::to(['/rashi/update','id'=>$data->rashiId]);
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
