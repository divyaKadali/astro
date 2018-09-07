<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PredictionByPlanetRaasi */

$this->title = 'Create Prediction By Planet Raasi';
$this->params['breadcrumbs'][] = ['label' => 'Prediction By Planet Raasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediction-by-planet-raasi-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php //Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div>
