<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;


/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */

$this->title = $model->horId;
$this->params['breadcrumbs'][] = ['label' => 'Horoscopedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//print_r($horoscopemodel->nakshatram);exit;


?>
<div class="doctors-view">
<div class="box box-primary">
<div class="box-body">

<div class="container" id="print">
<style>
/* th { 
	display: none;
}*/
/* .right-content { */
/*     font-size: 15px; */
/*     color: #676b6d; */
/*     font-size: 15px; */
/*     width: 5%; */
/*     margin: 10px; */
/*     float: left; */
/* } */
/* .right { */
/*     font-size: 15px; */
/*     width: 30%; */
/*     margin: 5px; */
/*     float: left; */
/* } */
/* .right-second { */
/*     font-size: 15px; */
/*     width: 45%; */
/*     color: #676b6d; */
/*     margin: 10px; */
/*     float: left; */
/*     word-wrap: break-word; */
/* } */

</style>
    <div class="row">      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" > 			   
			<div class="panel ">		
						
          
				<div class="panel-body">		   
									
					
					<div class="row">
						<div class="col-md-12 col-sm-6 col-xs-6 main-wrap">
							<div class="doctor-box">
								nakshatram:<?php $horoscopemodel->nakshatram?>
								rashiname:<?php $horoscopemodel->rashiname?>
								
                              
																							 							
							</div><!---doctor-box closed-->							
						</div>	<!---main-wrap closed-->							
					</div><!---row closed-->						
				</div><!---panel-body closed-->		
			</div><!---panel-info closed-->	
		</div><!---toppad-->
	</div><!--row closed-->	
</div>
</div>
</div>
</div>

