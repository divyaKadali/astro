<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionByPlanetRaasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prediction-by-planet-raasi-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'position_id')->textInput(['readOnly'=>true]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Moon')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Jupiter')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Mercury')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Sun')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Mars')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Venus')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Saturn')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Rahu')->textarea(['rows' => 6]) ?></div>
<div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'Ketu')->textarea(['rows' => 6]) ?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
textarea
{
	resize:none;
}

</style>