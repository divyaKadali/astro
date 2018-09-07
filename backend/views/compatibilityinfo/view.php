<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityInfo */

$this->title = $model->cmpinfo_id;
$this->params['breadcrumbs'][] = ['label' => 'Compatibility Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cmpinfo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cmpinfo_id], [
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
    <div class="col-sm-3" ><a>Understanding</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->understanding; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Supporting </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->supporting; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Intimacy </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->intimacy; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Taking Care Of Kids </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->taking_care_of_kids; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Overall Married Life Rating</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->overall_married_life_rating; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Divorced Or Separates</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->divorced_or_separates; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Divorce Separation Date </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->divorce_separation_date; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Cmpinfo User Id</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->cmpinfo_user_id; ?></div></li>
    </div>
    


</div>
</div>
</div>

