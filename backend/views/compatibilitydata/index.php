<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompatibilitydataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compatibility Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

   
    <?php // print_r($data->id);exit;// echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compatibility Data', ['create','id'=>Yii::$app->request->queryParams['id']], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'cmpd_id',
            'date_of_birth',
            'time_of_birth',
            'place_of_birth',
           // 'lagnam',
            //'seven_th_lord',
            //'plt_looking_at_seventh_house',
            //'planet_with_seventh_lord',
            //'seventh_lord_raasi_in_navaamsa',
            //'user_id',
            //'relation_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
