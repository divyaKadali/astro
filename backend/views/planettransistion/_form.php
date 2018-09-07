<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanetTransistion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planet-transistion-form">
<div class="box box-primary">
<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model); ?> 
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'rashiName')->textInput() ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'sun')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'moon')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'mars')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'mercury')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'jupitar')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'venus')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'saturan')->textInput(['maxlength' => true]) ?></div>
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
.help-block{
height:5px;

}
</style>
