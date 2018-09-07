<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanetsPositions */

$this->title = 'Update  Gochara_Phalam:'.$model->position_id;
$this->params['breadcrumbs'][] = ['label' => ' Gochara_Phalam', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ppId, 'url' => ['view', 'id' => $model->ppId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planets-positions-update">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
