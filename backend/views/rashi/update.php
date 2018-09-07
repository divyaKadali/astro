<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rashi */

$this->title = 'Update Raasi_Details:'.$model->rashiName;
$this->params['breadcrumbs'][] = ['label' => 'Raasi_Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rashiId, 'url' => ['view', 'id' => $model->rashiId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rashi-update">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
