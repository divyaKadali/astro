<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramPlanetColor */

$this->title = $model->planets;
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Planet Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-by-planet-raasi-view">
<div class="box box-primary">
<div class="box-body">


    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->g_plcId], ['class' => 'btn btn-primary']) ?>
        <?php  Html::a('Delete', ['delete', 'id' => $model->g_plcId], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
        ])?>
    </p>
    
    <div class="panel panel-default col-md-6">
	<div class="panel-body">
	
    <div class="container col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-4" ><a> Planet Name </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->planets; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-4" ><a>Sun</a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->	sun; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Moon </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->moon; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>mars </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->mars; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Mercury </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->mercury ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Jupiter </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->jupiter; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-4" ><a>Venus </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->venus; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-4" ><a>Saturn </a></div>
    <div class="col-sm-4" >:</div>
    <div class="col-sm-4" ><?= $model->saturn; ?></div></li>
    </div>
    <hr>
    
    </div>
    </div>
    </div>

    

</div>
</div>
</div>
