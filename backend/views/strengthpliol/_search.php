<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StrengthPliolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="strenght-predictionlordinotherlord-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'splord_rasiid') ?>

    <?= $form->field($model, 'lord') ?>

    <?= $form->field($model, 'position1') ?>

    <?= $form->field($model, 'position2') ?>

    <?= $form->field($model, 'position3') ?>

    <?php // echo $form->field($model, 'position4') ?>

    <?php // echo $form->field($model, 'position5') ?>

    <?php // echo $form->field($model, 'position6') ?>

    <?php // echo $form->field($model, 'position7') ?>

    <?php // echo $form->field($model, 'position8') ?>

    <?php // echo $form->field($model, 'position9') ?>

    <?php // echo $form->field($model, 'position10') ?>

    <?php // echo $form->field($model, 'position11') ?>

    <?php // echo $form->field($model, 'position12') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
