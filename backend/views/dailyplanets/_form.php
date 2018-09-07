<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\DailyPlanets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daily-planets-form">

    <?php $form = ActiveForm::begin();
    print_r($model->Ketu);?>

     <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'planet_date')->widget(DateTimePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date'],
    'pluginOptions' => [
        'autoclose'=>true,
    		'format' => 'dd-M-yyyy H:i:s'
    ]]); ?>
    </div>
     <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Moon')->dropDownList($rashilist) ?></div>
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'Jupiter')->dropDownList($rashilist) ?></div>
     <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'Mercury')->dropDownList($rashilist) ?></div>
      <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'Sun')->dropDownList($rashilist) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'Mars')->dropDownList($rashilist) ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Venus')->dropDownList($rashilist) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'Saturn')->dropDownList($rashilist) ?></div>

    <div class="form-group alignsubmit">
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