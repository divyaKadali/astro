<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserBhavasStrengths */

$this->title = 'Create User Bhavas Strengths';
$this->params['breadcrumbs'][] = ['label' => 'User Bhavas Strengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bhavas-strengths-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
