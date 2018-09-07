<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compatibility-data-form">

    <?php   $form = ActiveForm::begin(); ?>
   <div class="form-group col-lg-6 col-sm-12">
   <?= $form->field($model, 'date_of_birth')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date'],
    'pluginOptions' => [
        'autoclose'=>true,
    		'format' => 'dd-M-yyyy'
    ]
]); ?></div>
    <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'time_of_birth')->widget(TimePicker::classname(), [
    		'pluginOptions' => [
		    'defaultTime' => false,
    		 'showSeconds' => true,]]); ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'place_of_birth')->textInput(['maxlength' => true]) ?></div>
   <div class="form-group col-lg-6 col-sm-12">
    <?= $form->field($model, 'lagnam')->dropDownList($allrasis,['prompt' => 'Select']); ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'seven_th_lord')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'plt_looking_at_seventh_house')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'planet_with_seventh_lord')->textInput(['maxlength' => true]) ?></div>
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'seventh_lord_raasi_in_navaamsa')->textInput(['maxlength' => true]) ?></div>
  
    <div class="form-group col-lg-6 col-sm-12">

    <?= $form->field($model, 'relation_type')->dropDownList(['Wife' => 'Wife','Husband' => 'Husband'],['prompt' => 'Select Relation']) ?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php $url =Yii::$app->UrlManager->createUrl(['/compatibilitydata/seventhlord']);?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
 
 $(document).ready(function() {
		
 $("#compatibilitydata-lagnam").change(function(){
	
    var rashi = this.value;
  
   var url = '<?php echo $url;?>'
	
     $.ajax({
       url: '<?php echo $url;?>',
       type: "get",
       data: {rashiid: rashi} ,
       success: function (response) {
          
         var lord = response.split('+');
         var seven_th_lord = lord[0];
         var planet_with_seventh_lord = lord[1];
         var seventh_lord_raasi_in_navaamsa = lord[2];
        	 $("#compatibilitydata-seven_th_lord").val(seventh_lord_raasi_in_navaamsa);
        	 $("#compatibilitydata-plt_looking_at_seventh_house").val(seven_th_lord);
        	 $("#compatibilitydata-planet_with_seventh_lord").val(planet_with_seventh_lord);
        	 $("#compatibilitydata-seventh_lord_raasi_in_navaamsa").val(seventh_lord_raasi_in_navaamsa);
     
       },
       error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);     
            }


    });

 });

 });



  </script>
  <style>
.help-block {
    height: 5px;
}


</style>
  
