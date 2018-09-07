<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserbhavasstrengthsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Bhavas Strengths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create User Bhavas Strengths', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Create User Bhavas Strengths', ['create','id'=>Yii::$app->request->queryParams['id']], ['class' => 'btn btn-success']) ?>
        
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'ubs_id',
          //  'userid',
            'bhavam',
            'strengths',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
