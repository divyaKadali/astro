<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Planetrelations */

$this->title = 'Create Planet Relations';
$this->params['breadcrumbs'][] = ['label' => 'Planet Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planetrelations-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
