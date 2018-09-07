<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LagnaResults */

$this->title = 'Create Lagna Results';
$this->params['breadcrumbs'][] = ['label' => 'Lagna Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lagna-results-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
