<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PredictionLordInOtherLordRaasis */

$this->title = 'Update Prediction Lord In Other Lord Rasi:'.$model->lord;
$this->params['breadcrumbs'][] = ['label' => 'Prediction Lord In Other Lord Rasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->plord_rasiid, 'url' => ['view', 'id' => $model->plord_rasiid]];
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
