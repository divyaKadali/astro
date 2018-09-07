<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NotificationsHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifications-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'not_id')->textInput() ?>

    <?= $form->field($model, 'notification_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notification_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notification_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'schedule_time')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
