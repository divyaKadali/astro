<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Gochaaramindicator */

$this->title = 'Create Gochaaram Indicator';
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gochaaramindicator-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
