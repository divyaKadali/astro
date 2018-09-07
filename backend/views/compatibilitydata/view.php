<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Rashi;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityData */

$this->title = $model->cmpd_id;
$this->params['breadcrumbs'][] = ['label' => 'Compatibility Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cmpd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cmpd_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <div class="panel panel-default ">
	<div class="panel-body">
	
    <div class="container  col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Date Of Birth</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->date_of_birth; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Time Of Birth</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->time_of_birth; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Place Of Birth </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->place_of_birth; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Lagnam </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?php  
    $rasi= Rashi::find()->select('rashiName')->where(['rashiId'=> $model->lagnam])->all();
    $rasinameview =array();
    foreach ($rasi as $rasi){
    	$rasinameview = $rasi->rashiName;
    
    }?>
   <?= $rasinameview ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Seven Th Lord </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->seven_th_lord; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Plt Looking At Seventh House </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->plt_looking_at_seventh_house; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Planet With Seventh Lord </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->planet_with_seventh_lord; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Seventh Lord Raasi In Navaamsa </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->seventh_lord_raasi_in_navaamsa; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Relation Type</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->relation_type; ?></div></li>
    </div>

   
</div>
</div>
</div>
</div>
</div>
</div>
