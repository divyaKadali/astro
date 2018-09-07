<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
     
     <div class="form-group col-lg-6 col-sm-12 ">

    <?= $form->field($model, 'userid')->dropDownList($userslist,['prompt' => 'Select User']) ?>
     
    
    
   </div>
   
   <div class="form-group col-lg-12 col-sm-12">
  
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[0]')->dropDownList($rashilist,['prompt' => 'Select Rashi']) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[0]')->textInput(['value' => strtoupper('Moon'),'readOnly' => true]) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[0]')->textInput(['maxlength' => true,'placeholder' => 'Digrees']) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[0]')->textInput(['maxlength' => true,'placeholder' => 'Strength']) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[0]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram']) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[1]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[1]')->textInput(['value' => strtoupper('Jupiter'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[1]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[1]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[1]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[2]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[2]')->textInput(['value' => strtoupper('Mercury'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[2]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[2]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[2]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[3]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[3]')->textInput(['value' => strtoupper('Sun'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[3]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[3]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[3]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[4]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[4]')->textInput(['value' => strtoupper('Mars'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[4]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[4]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[4]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[5]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[5]')->textInput(['value' => strtoupper('Venus'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[5]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[5]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[5]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[6]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[6]')->textInput(['value' => strtoupper('Saturn'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[6]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[6]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[6]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[7]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[7]')->textInput(['value' => strtoupper('Rahu'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[7]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[7]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[7]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[8]')->dropDownList($rashilist,['prompt' => 'Select Rashi'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[8]')->textInput(['value' => strtoupper('Ketu'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'digrees[8]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'strength[8]')->textInput(['maxlength' => true,'placeholder' => 'Strength'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[8]')->textInput(['maxlength' => true,'placeholder' => 'Nakhatram'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   
   
   
   </div>
<div class="form-group col-lg-6 col-sm-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    
     

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
