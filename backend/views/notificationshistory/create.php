<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NotificationsHistory */

$this->title = 'Create Notifications History';
$this->params['breadcrumbs'][] = ['label' => 'Notifications Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifications-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
