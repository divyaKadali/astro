<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HoroscopeplanetsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscope-planets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'horoplanetId') ?>

    <?= $form->field($model, 'horoscopeId') ?>

    <?= $form->field($model, 'planet') ?>

    <?= $form->field($model, 'digrees') ?>

    <?= $form->field($model, 'strength') ?>

    <?php // echo $form->field($model, 'nakshatram') ?>

    <?php // echo $form->field($model, 'rashiname') ?>

    <?php // echo $form->field($model, 'lagnaLord') ?>

    <?php // echo $form->field($model, 'dhanaLord') ?>

    <?php // echo $form->field($model, 'kutumbaLord') ?>

    <?php // echo $form->field($model, 'maatruLord') ?>

    <?php // echo $form->field($model, 'putraLord') ?>

    <?php // echo $form->field($model, 'shetruLord') ?>

    <?php // echo $form->field($model, 'kalatraLord') ?>

    <?php // echo $form->field($model, 'shatruLord') ?>

    <?php // echo $form->field($model, 'bhaagyaLord') ?>

    <?php // echo $form->field($model, 'raajayLord') ?>

    <?php // echo $form->field($model, 'laabhaLord') ?>

    <?php // echo $form->field($model, 'vyayaLord') ?>

    <?php // echo $form->field($model, 'userid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
