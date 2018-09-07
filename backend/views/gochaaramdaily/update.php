<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramDaily */

$this->title = 'Update Gochaaram Daily: ' . $model->day_id;
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Daily', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->day_id, 'url' => ['view', 'id' => $model->day_id]];
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
</div>
</div>
</div>
