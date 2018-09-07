<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Rashi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rashi-form">

<div class="box box-primary">
<div class="box-body">
    <?php $form = ActiveForm::begin(); ?>
	<div class="form-group col-md-6 col-sm-12">
    <?= $form->field($model, 'rashiName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lord')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6,'maxlength'=>true]) ?>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<style>
textarea
{
resize:none;
}
</style>