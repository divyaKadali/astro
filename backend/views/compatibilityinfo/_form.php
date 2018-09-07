<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compatibility-info-form">

    <?php $form = ActiveForm::begin(); ?>
   <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'understanding')->textInput() ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'supporting')->textInput() ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'intimacy')->textInput() ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'taking_care_of_kids')->textInput() ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'overall_married_life_rating')->textInput() ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'divorced_or_separates')->textInput(['maxlength' => true]) ?></div>
       <div class="form-group col-lg-6 col-sm-12">
<?= $form->field($model, 'divorce_separation_date')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date'],
    'pluginOptions' => [
        'autoclose'=>true,
    		'format' => 'dd-M-yyyy'
    ]
]); ?></div>
       <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'cmpinfo_user_id')->textInput() ?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
.help-block {
    height: 5px;
}


</style>

