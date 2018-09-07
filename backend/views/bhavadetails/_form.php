<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BhavaDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bhava-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bhava_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'information')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
