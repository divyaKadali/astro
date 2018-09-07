<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionbyplanetraasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prediction-by-planet-raasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pprId') ?>

    <?= $form->field($model, 'position_id') ?>

    <?= $form->field($model, 'Moon') ?>

    <?= $form->field($model, 'Jupiter') ?>

    <?= $form->field($model, 'Mercury') ?>

    <?php // echo $form->field($model, 'Sun') ?>

    <?php // echo $form->field($model, 'Mars') ?>

    <?php // echo $form->field($model, 'Venus') ?>

    <?php // echo $form->field($model, 'Saturn') ?>

    <?php // echo $form->field($model, 'Rahu') ?>

    <?php // echo $form->field($model, 'Ketu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
