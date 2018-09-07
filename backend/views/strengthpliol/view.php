<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StrenghtPredictionlordinotherlord */

$this->title = $model->lord;
$this->params['breadcrumbs'][] = ['label' => 'Strenght Predictionlordinotherlords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->splord_rasiid], ['class' => 'btn btn-primary']) ?>
        <?php
//         Html::a('Delete', ['delete', 'id' => $model->splord_rasiid], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
//         ]) 
        ?>
    </p>
          <div class="">
    <div class="panel panel-default ">
	<div class="panel-body">
	
    <div class="container col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Lord</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->lord; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Position1</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position1; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position2 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position2; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position3 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position3; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position4 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position4 ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position5 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position5; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position6 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position6; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Position7 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position7; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position8</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position8; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Position9 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position9; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position10 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position10; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Position11</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position11; ?></div></li>
    </div>
        <div class="row">
    <div class="col-sm-3" ><a>Position12 </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->position12; ?></div></li>
    </div>
    <hr>
  
  
    </div>
    </div>
    </div>
    </div>

    <?php 
//     DetailView::widget([
//         'model' => $model,
//         'attributes' => [
//             'splord_rasiid',
//             'lord',
//             'position1:ntext',
//             'position2:ntext',
//             'position3:ntext',
//             'position4:ntext',
//             'position5:ntext',
//             'position6:ntext',
//             'position7:ntext',
//             'position8:ntext',
//             'position9:ntext',
//             'position10:ntext',
//             'position11:ntext',
//             'position12:ntext',
//         ],
//     ]) ?>

</div>
</div>
</div>

