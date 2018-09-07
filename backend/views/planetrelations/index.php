<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PlanetrelationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planet Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planetrelations-index">
<div class="box box-primary">
<div class="box-body">


    <h1><?php //Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Planet Relations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'planetrel',
            'planetName',
            'sun',
            'moon',
            'mars',
            //'mercury',
            //'jupiter',
            //'venus',
            //'saturn',
            //'rahu',
            //'kethu',
            //'createdBy',
            //'updatedBy',
            //'createdDate',
            //'updatedDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
</div>
</div>
