<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */

$this->title = 'Create Horoscopedetails';
$this->params['breadcrumbs'][] = ['label' => 'Horoscopedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscopedetails-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		'rashilist'=>$rashilist,
        	'userslist' => $userslist
    ]) ?>

</div>
