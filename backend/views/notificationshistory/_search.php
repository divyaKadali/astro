<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NotificationshistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifications-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'notification_historyid') ?>

    <?= $form->field($model, 'not_id') ?>

    <?= $form->field($model, 'notification_type') ?>

    <?= $form->field($model, 'notification_title') ?>

    <?= $form->field($model, 'notification_description') ?>

    <?php // echo $form->field($model, 'schedule_time') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
