
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Horoscope Analysis ';
$this->params['breadcrumbs'][] = ['label' => 'Horoscope users', 'url' => ['users/index']];
$this->params['breadcrumbs'][] = $this->title;
//print_r($analysisbylagna);exit;
?>

<style>
.user1{
    background-color: #ecf0f5;
    border: 2px solid #3c8dbc;
    padding: 25px;
    margin: 5px;
    }
</style>
<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

<div class="row  ">
    	<div class="col-md-12">
    	<div class="row">
    	<div class="form-group col-lg-12 col-sm-12 ">
 <h3><a>User Information :-</a></h3>

<div class="row user1">
<div class="col-md-12 ">

    	
         <div class="row" >
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>User Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->username?></div>
    	</div>
        
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Email</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->email?></div>
    	 </div>
    	  	 
        
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Date Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->dateofbirth?></div>
    	</div>
    	
        <div class="col-md-4">
    	<div class="col-sm-5"><a>First Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->first_name?></div>
    	</div>
    	
    	
        <div class="col-md-4">
    	<div class="col-sm-5"><a>Last Name</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->last_name?></div>
    	 </div>
    	  	 
        

    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Time Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->timeofbirth?></div>
    	</div>
    	
    	
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current City</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->current_city?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current State</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->current_state?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Place Of Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?= $userDetails->placeofbirth?></div>
    	</div>
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Current Country</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->current_country?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Mobile</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->mobile?></div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Dasa At Birth</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"><?= $userDetails->dasa_at_birth?></div>
    	</div>
    	
        </div>
    	</div>
        </div>
        </div>
        </div>
       
        <div class="row">
    	<div class="col-md-4">
    	<div class="col-sm-5"><a><h4>User Lagna :-</h4></a></div>
    	<div class="col-sm-5"><h4><?= $lagnaRashiNameNew ?></h4></div>
    	</div>
    	<div class="col-md-7">
    	<p class="navbar-right"><?= Html::a('Update', ['users/index'], ['class' => 'btn btn-primary']) ?></p>	
    	</div>
    	</div>
     <div class="panel panel-default ">
	 <div class="panel-body">
   
    	<div class="row">
    	<div class="col-md-2">
    	<div class=""><a><h4>Planets</h4></a></div>
    	</div>
    	<div class="col-md-3">
    	<div class=""><a><h4>RashiName</h4></a></div>
    	</div>
        <div class="col-md-2">
    	<div class=""><a><h4> Analysis by lagna</h4></a></div>
    	</div>
    	 <div class="col-md-2">
    	<div class=""><a><h4> Analysis by lord</h4></a></div>
    	</div>
    	 <div class="col-md-3">
    	<div class=""><a><h4> Analysis by Gochara</h4></a></div>
    	</div>
    	</div>
    	<hr>
    	
    	<?php if(!empty($allData)){ for($n=0; $n<count($allData); $n++){?>
    	<div class="row">
    	<div class="col-md-2">
    	<div class="col-sm-5"><a><?= $allData[$n]['planetName'];?></a></div>
    	</div>
    	<div class="col-md-3">
    	<div  class="col-sm-4">
    	<?= $allData[$n]['rashiName'];?>
    	</div>
    	</div>
        <div class="col-md-2">
    	<div >
    	<?= $allData[$n]['lagnaanlysisData'];?>
    	</div>
    	</div>
    	<div class="col-md-2">
    	<div ><?= $allData[$n]['lordplanetInfo'];?></div>
    	</div>
    	<div class="col-md-3">
    	<div >
    	<?= $allData[$n]['gocharamInfo'];?>
    	</div>
    	</div>
    	</div>
    	<hr>
    	<?php }} ?>
    	</div>
    	</div>
    	</div>
    	</div>
    	
    	
        
   <div class="panel panel-default col-md-5 " style="display: none;">
   <div class="panel-body">
   <div class="container col-md-12">
	    <div class="row">
    	<div class="col-md-5">
    	<div class=""><a><h4>Bhavam</h4></a></div>
    	</div>
    	<div class="col-md-5">
    	<div class=""><a><h4>Strengths</h4></a></div>
    	</div>
    	</div>
    	<hr>
    	<?php 
    	$bhavasnames=["Self","Wealth","Family","Mother","Assets","Children","EnemiesDebt","Marriage","Health","Lucky,Father","Career","Savings","Expenses"];
    	if(!empty($bhavam)){
    	for($n=0; $n<count($bhavam); $n++){?>
    	<div class="row">
    	<div class="col-md-3">
    	<div class="col-sm-3"><a><?= $bhavasnames[$n];?>
    	</a></div>
    	</div>
    	<div class="col-md-2">
    	<div class="col-sm-3">:</div>
    	</div>
    	<div class="col-md-2">
    	<div class="col-sm-1"><?= $bhavam[$n];?></div>
    	</div>
    	</div>
    	<?php }} ?>
    	</div>
    	</div>
    	</div>
    	
    	
    	 <div class="row">
    	<div class="col-md-5">
    	
    	</div>
        </div>
        <div class=""><a><h4>Bhavam Of strenghts :-</h4></a></div>
        <div class="panel panel-default col-md-5 ">
        <div class="panel-body">
        <div class="container col-md-12">
	    <div class="row">
    	<div class="col-md-6">
    	<a><h4>Bhavam</h4></a>
    	</div>
    	<div class="col-md-5">
    	<a><h4>Strengths</h4></a>
    	</div>
    	</div>
    	<hr>
    	<?php 
  		if(!empty($bhavam1)){
  		for($n=0; $n<=11; $n++){?>
    	<div class="row">
    	<div class="col-sm-6"><a><?= $bhavam1[$n];?></a></div>
    	<div class="col-sm-3">:</div>
    	<div class="col-sm-1"><?= $strengths[$n];?></div>
    	</div>
    	<?php }} ?>
    	</div>
    	</div>
    	</div>
    	
</div>
</div>
</div>


