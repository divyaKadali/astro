<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UserBhavasStrengths */

$this->title = $model->ubs_id;
$this->params['breadcrumbs'][] = ['label' => 'User Bhavas Strengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bhavas-strengths-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ubs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ubs_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ubs_id',
            'userid',
            'bhavam',
            'strengths',
        ],
    ]) ?>

</div>
