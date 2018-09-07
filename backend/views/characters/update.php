<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Characters */

$this->title = 'Update:'.$model->characterName;
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->characterId, 'url' => ['view', 'id' => $model->characterId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="characters-update">

    <h1><?php //Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
