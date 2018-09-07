<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionLordInOtherLordRaasis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prediction-lord-in-other-lord-raasis-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'lord')->textInput(['maxlength' => true ,'readOnly'=>true]) ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position1')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position2')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position3')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position4')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position5')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position6')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position7')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position8')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position9')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position10')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position11')->textInput() ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position12')->textInput() ?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<style>
.form-group {
	height: 100px;
	margin-bottom: 0;
}
.alignsubmit
{
height: 50%;
 margin-left: 15px;
 }
</style>
