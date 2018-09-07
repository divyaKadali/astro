<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Notifications */

$this->title = $model->notification_title;
$this->params['breadcrumbs'][] = ['label' => 'Notifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->not_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->not_id], [
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
    <div class="col-sm-3" ><a>Notification Title</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->notification_title; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Notification Description</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->notification_description ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Schedule Time</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->schedule_time; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Created Date</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->created_date; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Updated Date</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->updated_date; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Created By</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->created_by; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Updated By</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->updated_by; ?></div></li>
    </div></br>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    

</div>
