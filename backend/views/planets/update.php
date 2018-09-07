<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Planets */

$this->title = 'Update:'.$model->planetName;
$this->params['breadcrumbs'][] = ['label' => 'Planets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planetId, 'url' => ['view', 'id' => $model->planetId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planets-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
