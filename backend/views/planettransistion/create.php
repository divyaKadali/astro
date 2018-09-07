<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PlanetTransistion */

$this->title = 'Create Planet Transistion';
$this->params['breadcrumbs'][] = ['label' => 'Planet Transistions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planet-transistion-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
