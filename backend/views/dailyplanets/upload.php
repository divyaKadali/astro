<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

$this->title = 'Planets Transition Import File';

?>
<div class="daily-planets-index">
<div class="box box-primary">
<div class="box-body">
<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
	
    <?= $form->field($model,'file')->fileInput() ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
</div>
</div>
</div>