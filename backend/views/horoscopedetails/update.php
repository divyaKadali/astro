<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */

$this->title = 'Update Horoscope:'.$model->horId;
$this->params['breadcrumbs'][] = ['label' => 'Horoscopedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->horId, 'url' => ['view', 'id' => $model->horId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horoscopedetails-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		'rashilist'=>$rashilist,
        	'userslist' => $userslist
    ]) ?>

</div>
