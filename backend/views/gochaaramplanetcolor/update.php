<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramPlanetColor */

$this->title = 'Update Gochaaram Planet Color:'.$model->planets;
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Planet Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planets, 'url' => ['view', 'id' => $model->g_plcId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gochaaram-planet-color-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
