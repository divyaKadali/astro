<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Yearly */

$this->title = 'Create Yearly';
$this->params['breadcrumbs'][] = ['label' => 'Yearlies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yearly-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
