<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramDaily */

$this->title = 'Create Gochaaram Daily';
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Daily', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gochaaram-daily-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
