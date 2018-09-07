<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Planets */

$this->title = $model->planetName;
$this->params['breadcrumbs'][] = ['label' => 'Planets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->planetId], ['class' => 'btn btn-primary']) ?>
        <?php
//         Html::a('Delete', ['delete', 'id' => $model->planetId], [
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
    
    <h2>Detail View</h2>
    <hr>
    
    <div class="row">
    <div class="col-sm-3" ><a>Planet Name</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->planetName; ?></div></li>
    </div></br>
    <div class="row">
    <div class="col-sm-3" ><a>Direction</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->direction; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Organs </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->organs; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Diceases </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->diceases; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>GemStone </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->gemStone; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Dhaanam </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->dhaanam; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Characterstic </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->characterstic; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Kaaraka </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->kaaraka; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>Nature</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->nature; ?></div></li>
    </div></br>
    
     <div class="row">
    <div class="col-sm-3" ><a>Career Path </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->careerPath; ?></div></li>
    </div></br>
     <div class="row">
    <div class="col-sm-3" ><a>friend </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->friend; ?></div></li>
    </div>
    </br>
    <div class="row">
    <div class="col-sm-3" ><a>Enemy </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->enemy; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Uccha_Raasi </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->ucha; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Neecha_Raasi  </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->neecha ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Sama_Raasi  </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->sama ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Shatru_Raasi </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->shatru ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Mitra_Raasi </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->mitra ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Swakshetram </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->swakshetram ?></div></li>
    </div>
     </br>
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
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Dasha Startdate</a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->dasha_startdate; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Dasha Enddate </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->dasha_enddate; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Dasha Years </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->dasha_years; ?></div></li>
    </div>
     </br>
    <div class="row">
    <div class="col-sm-3" ><a>Dasha Order </a></div>
    <div class="col-sm-3" >:</div>
    <div class="col-sm-4" ><?= $model->dasha_order; ?></div></li>
    </div>
    
<hr>
  
  
    </div>
    </div>
    </div>
    </div>
   

    
    



</div>
</div>
</div>
