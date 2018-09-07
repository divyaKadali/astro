<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gochaaramindicator */

$this->title = 'Update Gochaaramindicator:'. $model->g_positionid;
$this->params['breadcrumbs'][] = ['label' => 'Gochaaramindicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->g_indId, 'url' => ['view', 'id' => $model->g_indId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gochaaramindicator-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
