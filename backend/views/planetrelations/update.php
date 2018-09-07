<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Planetrelations */

$this->title = 'Update Relation:'. $model->planetName;
$this->params['breadcrumbs'][] = ['label' => 'Planetrelations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planetrel, 'url' => ['view', 'id' => $model->planetrel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planetrelations-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
