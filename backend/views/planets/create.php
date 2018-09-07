<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Planets */

$this->title = 'Create Planets';
$this->params['breadcrumbs'][] = ['label' => 'Planets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-create">

    <h1><?php //Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
