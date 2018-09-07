<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Planetrelations */

$this->title = $model->planetName;
$this->params['breadcrumbs'][] = ['label' => 'Planet Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planetrelations-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->planetrel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->planetrel], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

   
  
    <div class="panel panel-default col-md-6">
	<div class="panel-body">
	
    <div class="container  col-md-12">
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Planet Name</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->planetName; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Sun</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->sun; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Moon</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->moon; ?></div></li>
    </div></br>
    
    <div class="row">
    <div class="col-sm-3" ><a>Mars</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->mars; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Mercury</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->mercury; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Jupiter</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->jupiter; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Venus</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->venus; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Saturn</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->saturn; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Rahu</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->rahu; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Kethu</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->kethu; ?></div></li>
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
