<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StrenghtPredictionlordinotherlord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="strenght-predictionlordinotherlord-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'lord')->textInput(['maxlength' => true ,'readOnly'=>true]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position1')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position2')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position3')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position4')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position5')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position6')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position7')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position8')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position9')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position10')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position11')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'position12')->textarea(['rows' => 6]) ?></div>
     <div class="form-group col-lg-6 col-sm-12">

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
