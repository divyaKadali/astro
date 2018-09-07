<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanetTransistion */

$this->title = 'Update Planet Transistion:'.$model->rashiName;
$this->params['breadcrumbs'][] = ['label' => 'Planet Transistions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planetTransId, 'url' => ['view', 'id' => $model->planetTransId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planet-transistion-update">


    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

