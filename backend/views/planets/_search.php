<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanetsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'planetId') ?>

    <?= $form->field($model, 'planetName') ?>

    <?= $form->field($model, 'direction') ?>

    <?= $form->field($model, 'organs') ?>

    <?= $form->field($model, 'diceases') ?>

    <?php // echo $form->field($model, 'gemStone') ?>

    <?php // echo $form->field($model, 'dhaanam') ?>

    <?php // echo $form->field($model, 'characterstic') ?>

    <?php // echo $form->field($model, 'kaaraka') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'updatedBy') ?>

    <?php // echo $form->field($model, 'createdDate') ?>

    <?php // echo $form->field($model, 'updatedDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
