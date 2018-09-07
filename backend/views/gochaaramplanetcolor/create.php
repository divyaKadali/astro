<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GochaaramPlanetColor */

$this->title = 'Create Gochaaram Planet Color';
$this->params['breadcrumbs'][] = ['label' => 'Gochaaram Planet Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gochaaram-planet-color-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
