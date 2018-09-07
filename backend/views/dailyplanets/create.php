<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DailyPlanets */

$this->title = 'Create Planet Transistion';
$this->params['breadcrumbs'][] = ['label' => 'Planet Transistion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-planets-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		'rashilist'=>$rashilist
    ]) ?>

</div>
</div>
</div>
