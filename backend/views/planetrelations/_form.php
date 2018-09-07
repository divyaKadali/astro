<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Planetrelations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planetrelations-form">
<div class="box box-primary">
<div class="box-body">


    <?php $form = ActiveForm::begin(); ?>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'planetName')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'sun')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'moon')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'mars')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'mercury')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'jupiter')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'venus')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'saturn')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'rahu')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'kethu')->textInput(['maxlength' => true]) ?></div>

   

    <div class="form-group col-lg-6 col-sm-12">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>

<style>
.help-block {
    height: 5px;
}


</style>
