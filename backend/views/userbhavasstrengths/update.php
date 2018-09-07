<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserBhavasStrengths */

$this->title = 'Update User Bhavas Strengths: ' . $model->ubs_id;
$this->params['breadcrumbs'][] = ['label' => 'User Bhavas Strengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ubs_id, 'url' => ['view', 'id' => $model->ubs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-bhavas-strengths-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
