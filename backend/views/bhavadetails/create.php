<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BhavaDetails */

$this->title = 'Create Bhava Details';
$this->params['breadcrumbs'][] = ['label' => 'Bhava Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bhava-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
