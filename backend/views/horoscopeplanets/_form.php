<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UrlManager;

/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

 <div class="form-group col-lg-12 col-sm-12 ">
 <h3>User Information</h3>
<div class="row well">
<div class="col-md-12">

    	
         <div class="row">
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>User Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->username?></div>
    	</div>
        
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Email</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->email?></div>
    	 </div>
    	  	 
        
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Date Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->dateofbirth?></div>
    	</div>
    	
        <div class="col-md-4">
    	<div class="col-sm-5"><a>First Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->first_name?></div>
    	</div>
    	
    	
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Last Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->last_name?></div>
    	 </div>
    	  	 
        

    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Time Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->timeofbirth?></div>
    	</div>
    	
    	
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current City</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->current_city?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current State</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->current_state?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Place Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?= $userInfo->placeofbirth?></div>
    	</div>
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current Country</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->current_country?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Mobile</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->mobile?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Dasa At Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userInfo->dasa_at_birth?></div>
    	</div>
        
    	
        </div>
    	</div>
        </div>
        
      
       </div>


    <?php $form = ActiveForm::begin(); ?>
 
     
     
   
   <div class="form-group col-lg-12 col-sm-12">
    <div class="row">
   <div class="form-group col-lg-4 col-sm-12">
  <?= $form->field($model, 'rashiId')->dropDownList($rashilist,['prompt' => 'Select Lagna Lord']) ?>
  </div>
  </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[0]')->textInput(['value' => strtoupper('Moon'),'readOnly' => true,'class' => 'planet form-control']) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[0]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Moon' ,'planid' => '0']) ?>

  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[0]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi']) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[0]')->textInput(['maxlength' => true,'placeholder' => 'Digrees']) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[0]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control']) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[0]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram']) ?>
  <?= $form->field($model, 'horoplanetId[0]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[0]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam']) ?>
  </div>
  
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[1]')->textInput(['value' => strtoupper('Jupiter'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[1]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Jupiter','planid' => '1'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[1]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[1]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[1]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[1]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[1]')->hiddenInput()->label(false)?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[1]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[2]')->textInput(['value' => strtoupper('Mercury'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[2]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Mercury','planid' => '2'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[2]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[2]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[2]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[2]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[2]')->hiddenInput()->label(false)?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[2]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[3]')->textInput(['value' => strtoupper('Sun'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[3]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Sun','planid' => '3'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[3]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[3]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[3]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[3]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[3]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[3]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[4]')->textInput(['value' => strtoupper('Mars'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[4]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Mars','planid' => '4'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[4]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[4]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[4]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[4]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[4]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[4]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
    
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[5]')->textInput(['value' => strtoupper('Venus'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[5]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Venus','planid' => '5'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[5]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[5]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[5]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[5]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[5]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[5]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[6]')->textInput(['value' => strtoupper('Saturn'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[6]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Saturn','planid' => '6'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[6]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
 
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[6]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[6]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[6]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[6]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[6]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[7]')->textInput(['value' => strtoupper('Rahu'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[7]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Rahu','planid' => '7'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[7]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[7]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[7]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[7]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[7]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[7]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
  </div>
  </div>
   </div>
   
   
   <div class="row">
  <div class="form-group col-lg-12 col-sm-12">
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'planet[8]')->textInput(['value' => strtoupper('Ketu'),'readOnly' => true])->label(false) ?>
  </div>
   <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'rashiname[8]')->dropDownList($rashilist,['prompt' => 'Select Rashi','class'=>'rashi  form-control' , 'planet' =>'Kethu','planid' => '8'])->label(false) ?>
  </div>
  
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'navamsa_position[8]')->dropDownList($rashilist,['prompt' => 'Select Navamsa Rashi'])->label(false) ?>
  </div>
  
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'digrees[8]')->textInput(['maxlength' => true,'placeholder' => 'Digrees'])->label(false) ?>
  </div>
   <div class="form-group col-lg-1 col-sm-12">
  <?= $form->field($model, 'strength[8]')->textInput(['maxlength' => true,'placeholder' => 'Strength','class'=>'strength form-control'])->label(false) ?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'nakshatram[8]')->dropDownList($nakhatramList,['prompt' => 'Select Nakshatram'])->label(false) ?>
  <?= $form->field($model, 'horoplanetId[8]')->hiddenInput()->label(false)?>
  </div>
  <div class="form-group col-lg-2 col-sm-12">
  <?= $form->field($model, 'shadbalam[8]')->textInput(['maxlength' => true,'placeholder' => 'Shadbalam'])->label(false) ?>
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
<?php $url =Yii::$app->UrlManager->createUrl(['/horoscopeplanets/strengths']);
//print_r($url);exit();?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
 
 $(document).ready(function() {
		
 $(".rashi").change(function(){

   var rashi = this.value;
   var planet = $(this).attr("planet") ;
   var planid = $(this).attr("planid") ;
   var url = '<?php echo $url;?>'
	   
    $.ajax({
       url: '<?php echo $url;?>',
       type: "get",
       data: {rashi: rashi , planet: planet} ,
       success: function (response) {
    	   $("#horoscopeplanets-strength-"+planid).val(response);       

       },
       error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }


   });

 });

 });



  </script>
