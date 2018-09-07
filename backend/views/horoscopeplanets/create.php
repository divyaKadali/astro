<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HoroscopePlanets */

$this->title = 'Create Horoscope Planets';
$this->params['breadcrumbs'][] = ['label' => 'Horoscope User', 'url' => ['/users/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscope-planets-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		'userslist' => $userslist,
    		'rashilist'=>$rashilist,
    		'nakhatramList' => $nakhatramList,
    		'userInfo' => $userInfo
    ]) ?>

</div>
