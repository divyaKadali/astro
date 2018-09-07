<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Characters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="characters-form">
<div class="box box-primary">
<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
     <div class="form-group col-lg-7 ">

    <?= $form->field($model, 'characterName')->textInput(['maxlength' => true]) ?>
    </div>
     <div class="form-group col-lg-7 ">

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    </div>

    

    <div class="form-group col-lg-7">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
