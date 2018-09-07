<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DailyPlanets */

$this->title = $model->dpId;
$this->params['breadcrumbs'][] = ['label' => 'Planet Transistion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dpId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dpId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

  
    
      <div class="">
    <div class="panel panel-default ">
	<div class="panel-body">
	
    <div class="container  col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Date</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $planetdate; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Moon</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Moon; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Jupiter </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Jupiter; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Mercury </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Mercury; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Sun </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Sun; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Mars </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Mars; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Venus </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Venus; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Saturn </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->Saturn; ?></div></li>
    </div></br>
   
    
<hr>
  
  
    </div>
    </div>
    </div>
    </div>
   
    

</div>
</div>
</div>
