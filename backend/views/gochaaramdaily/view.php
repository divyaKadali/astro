<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramDaily */

$this->title = $model->day_id;
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Daily', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->day_id], ['class' => 'btn btn-primary']) ?>
        <?php 
//         Html::a('Delete', ['delete', 'id' => $model->day_id], [
//             'class' => 'btn btn-danger',
//             'data' => [
//                 'confirm' => 'Are you sure you want to delete this item?',
//                 'method' => 'post',
//             ],
//         ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'day_id',
            'rashi_name',
            'description:ntext',
        ],
    ]) ?>

</div>
</div>
</div>
