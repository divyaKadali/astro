<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Characters */

$this->title = 'Create Characters';
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="characters-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
