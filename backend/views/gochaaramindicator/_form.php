<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Gochaaramindicator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

    <?php  $form = ActiveForm::begin(); ?>
    <div class="form-group col-lg-6 col-sm-12"> 
    <?= $form->field($model, 'g_positionid')->textInput(['readOnly'=>true]) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 
   <?= $form->field($model, 'sun')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'moon')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
      <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'mars')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'mercury')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'jupiter')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'venus')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12"> 

    <?= $form->field($model, 'saturn')->dropDownList(
			['Red' => 'Red', 'Green' => 'Green', 'Yellow' => 'Yellow'],['prompt'=>'Select Colour...']) ?>
    </div>
     

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success'],['prompt'=>'Select Colour...']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div></div>