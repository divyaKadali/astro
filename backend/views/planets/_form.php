<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Planets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planets-form">
<div class="box box-primary">
<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'planetName')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'direction')->textarea(['rows' => 4]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'organs')->textInput(['maxlength' => true])?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'diceases')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'gemStone')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'dhaanam')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'characterstic')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'kaaraka')->textInput(['maxlength' => true])?></div>
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'nature')->textInput(['maxlength' => true])?></div>
     
      <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'careerPath')->textInput(['maxlength' => true])?></div>
     
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'friend')->textInput(['maxlength' => true])?></div>
     
      <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'neutral')->textInput(['maxlength' => true])?></div>
     
      <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'enemy')->textInput(['maxlength' => true])?></div>

    <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'ucha')->textInput(['maxlength' => true])?></div>
     
       <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'neecha')->textInput(['maxlength' => true])?></div>
     
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'sama')->textInput(['maxlength' => true])?></div>
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'shatru')->textInput(['maxlength' => true])?></div>
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'mitra')->textInput(['maxlength' => true])?></div>
     
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'swakshetram')->textInput(['maxlength' => true])?>
     

 
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<style>
textarea
{
	resize:none;
}

</style>