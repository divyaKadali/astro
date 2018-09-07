<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rashi */

$this->title = $model->rashiName;
$this->params['breadcrumbs'][] = ['label' => 'Raasi_Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rashi-view">

   <div class="box box-primary">
<div class="box-body">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rashiId], ['class' => 'btn btn-primary']) ?>
        <?php
//         Html::a('Delete', ['delete', 'id' => $model->rashiId], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
//         ]) ?>
    </p>

  
    <div class="">
    <div class="panel panel-default ">
	<div class="panel-body">
	
    <div class="container  col-md-12">
    
    <h2>Raasi_Detail's</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Rashi Name</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->rashiName; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Lord</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->lord; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Description</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->description; ?></div></li>
    </div></br>
    
    <div class="row">
    <div class="col-sm-3" ><a>Created By </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->createdBy; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Updated By </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->updatedBy; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Created Date </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->createdDate; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Updated Date </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->updatedDate; ?></div></li>
    </div>
    <hr>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
</div>
