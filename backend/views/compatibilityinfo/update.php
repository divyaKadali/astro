<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CompatibilityInfo */

$this->title = 'Update Compatibility Info';
$this->params['breadcrumbs'][] = ['label' => 'Compatibility Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cmpinfo_id, 'url' => ['view', 'id' => $model->cmpinfo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
