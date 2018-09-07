<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LagnaResults */

$this->title = 'Update Lagna Results:'.$model->rashi_name;
$this->params['breadcrumbs'][] = ['label' => 'Lagna Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rashi_name, 'url' => ['view', 'id' => $model->lagnaresult_id]];
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
