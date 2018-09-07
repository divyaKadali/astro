<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;

/* @var $this yii\web\View */
/* @var $model backend\models\UserBhavasStrengths */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">


	
	
  
    

    <?php $form = ActiveForm::begin(); ?>
    
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[0]')->textInput(['value' => 'Self','readOnly' => true,'class' => 'planet form-control']) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[0]')->textInput(['maxlength' => true]) ?>
   </div>
   </div>
   </div>
  
  <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[1]')->textInput(['value' => 'Wealth-Family','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[1]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[2]')->textInput(['value' => 'Co-borns-Prowess','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[2]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[3]')->textInput(['value' => 'Assets-Vehicles','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[3]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[4]')->textInput(['value' =>'Children-Mantra','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[4]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[5]')->textInput(['value' => 'Enemies-Debts','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[5]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[6]')->textInput(['value' => 'Spouse-MarriedLife','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[6]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[7]')->textInput(['value' => 'Health-Longevity','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[7]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[8]')->textInput(['value' => 'Luck-Inheritance','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[8]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[9]')->textInput(['value' => 'Career-Success','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[9]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[10]')->textInput(['value' =>'Savings-Income','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[10]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   <div class="row">
   <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'bhavam[11]')->textInput(['value' => 'Expenses-Moksha','readOnly' => true,'class' => 'planet form-control'])->label(false) ?>
   </div>
   <div class="form-group col-lg-2 col-sm-12">
   <?= $form->field($model, 'strengths[11]')->textInput(['maxlength' => true])->label(false) ?>
   </div>
   </div>
   </div>
   
   
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>


