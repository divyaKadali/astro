<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BhavaDetails */

$this->title = $model->bhava_name;
$this->params['breadcrumbs'][] = ['label' => 'Bhava Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bhavadetails_id], ['class' => 'btn btn-primary']) ?>
        <?php
//         Html::a('Delete', ['delete', 'id' => $model->bhavadetails_id], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
//         ]) ?>
    </p>

    <?php
//     DetailView::widget([
//         'model' => $model,
//         'attributes' => [
//             'bhavadetails_id',
//             'bhava_name',
//             'information:ntext',
//         ],
//     ]) ?>
    
    <div class="">
    <div class="panel panel-default ">
	<div class="panel-body">
	
    <div class="container col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Bhavam Name</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->bhava_name; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Information</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->information; ?></div></li>
    </div>
  
  
    </div>
    </div>
    </div>
    </div>

</div>
</div>
</div>
