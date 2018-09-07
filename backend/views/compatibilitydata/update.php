<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityData */

$this->title = 'Update Compatibility Data';
$this->params['breadcrumbs'][] = ['label' => 'Compatibility Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cmpd_id, 'url' => ['view', 'id' => $model->cmpd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'allrasis' => $allrasis,
    ]) ?>

</div>
</div>
</div>

