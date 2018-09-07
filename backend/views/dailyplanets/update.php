<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DailyPlanets */

$this->title = 'Update Planet Transistion:'.$model->planet_date;
$this->params['breadcrumbs'][] = ['label' => 'Planet Transistion', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dpId, 'url' => ['view', 'id' => $model->dpId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daily-planets-update">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		'rashilist'=>$rashilist
    ]) ?>

</div>
</div>
</div>
