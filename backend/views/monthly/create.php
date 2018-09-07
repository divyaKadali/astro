<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Monthly */

$this->title = 'Create Monthly';
$this->params['breadcrumbs'][] = ['label' => 'Monthlies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monthly-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
