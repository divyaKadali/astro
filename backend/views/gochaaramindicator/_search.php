<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramindicatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gochaaramindicator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'g_indId') ?>

    <?= $form->field($model, 'g_positionid') ?>

    <?= $form->field($model, 'sun') ?>

    <?= $form->field($model, 'moon') ?>

    <?= $form->field($model, 'mars') ?>

    <?php // echo $form->field($model, 'mercury') ?>

    <?php // echo $form->field($model, 'jupiter') ?>

    <?php // echo $form->field($model, 'venus') ?>

    <?php // echo $form->field($model, 'saturn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
