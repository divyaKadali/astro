<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Notifications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planets-form">
<div class="box box-primary">
<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'notification_title')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">
     <?= $form->field($model, 'schedule_time')->widget(DateTimePicker::classname(), [
	'options' => ['placeholder' => 'Enter time ...'],
	
     		'pluginOptions' => [
			'format' => 'yyyy-mm-dd hh:ii:ss',
		'autoclose' => true
	]
]); 
    ?></div>
 <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'notification_description')->textarea(['rows' => 6,'maxlength' => true]) ?></div>
 
    <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'notification_type')->dropdownList(['prompt' => "Select Notification Type",'user'=>'User','global'=>'Global'])->hiddenInput()->label(false); ?></div>
 
 
    <div class="form-group col-lg-12 col-sm-12">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
