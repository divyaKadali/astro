<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Yearly */

$this->title = 'Update Yearly: ' . $model->rashi_name;
$this->params['breadcrumbs'][] = ['label' => 'Yearlies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rashi_name, 'url' => ['view', 'id' => $model->year_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prediction-lord-in-other-lord-raasis-update">
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
