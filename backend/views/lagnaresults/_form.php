<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LagnaResults */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lagna-results-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rashi_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'information')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
