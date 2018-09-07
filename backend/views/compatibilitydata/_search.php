<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilitydataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compatibility-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cmpd_id') ?>

    <?= $form->field($model, 'date_of_birth') ?>

    <?= $form->field($model, 'time_of_birth') ?>

    <?= $form->field($model, 'place_of_birth') ?>

    <?= $form->field($model, 'lagnam') ?>

    <?php // echo $form->field($model, 'seven_th_lord') ?>

    <?php // echo $form->field($model, 'plt_looking_at_seventh_house') ?>

    <?php // echo $form->field($model, 'planet_with_seventh_lord') ?>

    <?php // echo $form->field($model, 'seventh_lord_raasi_in_navaamsa') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'relation_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
