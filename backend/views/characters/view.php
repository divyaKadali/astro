<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Characters */

$this->title = $model->characterName;
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="characters-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->characterId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->characterId], [
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
    <div class="col-sm-3" ><a>Character Name</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->characterName; ?></div></li>
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
