<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanetrelationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planetrelations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'planetrel') ?>

    <?= $form->field($model, 'planetName') ?>

    <?= $form->field($model, 'sun') ?>

    <?= $form->field($model, 'moon') ?>

    <?= $form->field($model, 'mars') ?>

    <?php // echo $form->field($model, 'mercury') ?>

    <?php // echo $form->field($model, 'jupiter') ?>

    <?php // echo $form->field($model, 'venus') ?>

    <?php // echo $form->field($model, 'saturn') ?>

    <?php // echo $form->field($model, 'rahu') ?>

    <?php // echo $form->field($model, 'kethu') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'updatedBy') ?>

    <?php // echo $form->field($model, 'createdDate') ?>

    <?php // echo $form->field($model, 'updatedDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
