<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramDaily */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gochaaram-daily-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rashi_name')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'description')->textarea(['rows' => 6]) ?>
     <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 2],
        'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
