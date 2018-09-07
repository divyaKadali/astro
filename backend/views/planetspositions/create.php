<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PlanetsPositions */

$this->title = 'Create Gochara_Phalam';
$this->params['breadcrumbs'][] = ['label' => ' Gochara_Phalam', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planets-positions-create">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
