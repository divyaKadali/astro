<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rashi */

$this->title = 'Create Raasi_Details';
$this->params['breadcrumbs'][] = ['label' => 'Raasi_Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rashi-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
