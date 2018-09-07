<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HoroscopedetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horoscopedetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'horId') ?>

    <?= $form->field($model, 'planatId') ?>

    <?= $form->field($model, 'planatName') ?>

    <?= $form->field($model, 'rashiId') ?>

    <?= $form->field($model, 'rashiName') ?>

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
