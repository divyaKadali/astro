<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NotificationsHistory */

$this->title = $model->notification_historyid;
$this->params['breadcrumbs'][] = ['label' => 'Notifications Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifications-history-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->notification_historyid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->notification_historyid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'notification_historyid',
            'not_id',
            'notification_type',
            'notification_title',
            'notification_description:ntext',
            'schedule_time',
            'created_date',
            'updated_date',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
