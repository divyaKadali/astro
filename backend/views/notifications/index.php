<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NotificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notification', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Notification History', ['notificationshistory/index'], ['class' => 'btn btn-primary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'not_id',
           // 'notification_type',
            'notification_title',
            'notification_description:ntext',
            'schedule_time',
            //'created_date',
            //'updated_date',
            //'created_by',
            //'updated_by',

//             ['class' => 'yii\grid\ActionColumn',
//             		'template' =>'{view} {delete} {update} {NotificationHistory}',
//             		'buttons' => [
//             				'NotificationHistory' => function ($url,$data){
//             				$url= Url::to(['notificationshistory/index','id'=>$data->not_id]);
//             				return Html::a('<span class="glyphicon glyphicon-circle-arrow-right"></span>',$url,['title'=>'history']);
// },
//     ],
            		
//     ],
        ],
    ]); ?>
</div>
</div>
</div>

