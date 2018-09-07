<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionByPlanetRaasi */

$this->title = $model->pprId;
$this->params['breadcrumbs'][] = ['label' => 'Prediction By Planet Raasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-by-planet-raasi-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pprId], ['class' => 'btn btn-primary']) ?>
        <?php  Html::a('Delete', ['delete', 'id' => $model->pprId], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
        ]) ?>
    </p>
    <div class="panel panel-default col-md-6">
	<div class="panel-body">
	
    <div class="container col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-4" ><a>Position_id</a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->position_id; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-4" ><a>Moon</a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Moon; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Jupiter </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Jupiter; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Mercury </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Mercury; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Sun </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Sun ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Mars </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Mars; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Venus </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Venus; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-4" ><a>Saturn </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Saturn; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Rahu</a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Rahu; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-4" ><a>Ketu </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->Ketu; ?></div></li>
    </div>
    <hr>
    
    </div>
    </div>
    </div>



</div></div></div>
