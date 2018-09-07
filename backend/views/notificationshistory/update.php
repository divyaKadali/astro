<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NotificationsHistory */

$this->title = 'Update Notifications History: ' . $model->notification_historyid;
$this->params['breadcrumbs'][] = ['label' => 'Notifications Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notification_historyid, 'url' => ['view', 'id' => $model->notification_historyid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notifications-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
