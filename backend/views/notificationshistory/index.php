<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NotificationshistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notifications Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-lord-in-other-lord-raasis-index">
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php //Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Notifications History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'notification_historyid',
            'not_id',
            'notification_type',
            'notification_title',
            'notification_description:ntext',
            'schedule_time',
            //'created_date',
            //'updated_date',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn',
            		'template'=>'',

            		
    ],
        ],
    ]); ?>
</div>
</div>
</div>
</div>

