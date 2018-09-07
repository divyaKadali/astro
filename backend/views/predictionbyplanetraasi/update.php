<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionByPlanetRaasi */

$this->title = 'Update Prediction By Planet Raasi:'.$model->pprId;
$this->params['breadcrumbs'][] = ['label' => 'Prediction By Planet Raasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pprId, 'url' => ['view', 'id' => $model->pprId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prediction-by-planet-raasi-update">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
