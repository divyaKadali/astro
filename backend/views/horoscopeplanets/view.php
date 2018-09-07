<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use yii\grid\GridView;
//use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model backend\models\HoroscopePlanets */

$this->title = 'User Horoscope Details : '. $userName;
$this->params['breadcrumbs'][] = ['label' => 'Horoscope User', 'url' => ['/users/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscope-planets-view">
<div class="box box-primary">
<div class="box-body">
<div class="col-md-12">




<div class="row well">
    	<div class="col-md-12">
    	<div class="row">
    	<h3>Lords Information</h3>
    	</div>
    	<div class="row">
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Lagna </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->lagnaLord)){
    		echo $horoscopeDetails->lagnaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Dhana </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->dhanaLord)){
    		echo $horoscopeDetails->dhanaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Kutumba </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->kutumbaLord)){
    		echo $horoscopeDetails->kutumbaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Maatru </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->maatruLord)){
    		echo $horoscopeDetails->maatruLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    <div class="col-md-4">
    	<div class="col-sm-5"><a>Putra </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->putraLord)){
    		echo $horoscopeDetails->putraLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Shetru </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->shetruLord)){
    		echo $horoscopeDetails->shetruLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Kalatra </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->kalatraLord)){
    		echo $horoscopeDetails->kalatraLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    <div class="col-md-4">
    	<div class="col-sm-5"><a>Shetru </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->shatruLord)){
    		echo $horoscopeDetails->shatruLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	 <div class="col-md-4">
    	<div class="col-sm-5"><a>Bhaagya </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->bhaagyaLord)){
    		echo $horoscopeDetails->bhaagyaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	
    	 <div class="col-md-4">
    	<div class="col-sm-5"><a>Raajay </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->raajayLord)){
    		echo $horoscopeDetails->bhaagyaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Laabha </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->laabhaLord)){
    		echo $horoscopeDetails->laabhaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Vyaya </a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($horoscopeDetails->vyayaLord)){
    		echo $horoscopeDetails->vyayaLord;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
 
    	</div>
    	</div>
    	
    	</div>
  <?php 

    if(!empty($model1)){
    foreach($model1 as $item){

    	?>
    	
    	<div class="row well">
    	<div class="col-md-12">
    	<div class="row">
    	<h3><?= $item->planet?></h3>
    	</div>
    	<div class="row">
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Rashi</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->rashiname)){
    		echo $item->rashiname;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Navamsa Rashi</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->navamsa_position)){
    		echo $item->navamsa_position;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Digrees</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->digrees)){
    		echo $item->digrees;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Strength</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->strength)){
    		echo $item->strength;
    	    }else{
    		echo " ";
            }?> </div>
    	</div>
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Nakshatram</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->nakshatram)){
    		echo $item->nakshatram;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	<div class="col-md-4">
    	<div class="col-sm-5"><a>Shadbalam</a></div>
    	<div class="col-sm-1">:</div>
    	<div class="col-sm-4"> <?php if(!empty($item->shadbalam)){
    		echo $item->shadbalam;
    	    }else{
    		echo "";
            }?> </div>
    	</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	</div>
    	</div>
    	
    	</div>
    	
    <?php }}?>
    </div>
</div>

</div>
</div>
</div>


<style>

h3, .h3 {
    color: #f39c12;
}
</style>
