<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompatibilityinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compatibility Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscopedetails-form">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compatibility Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'cmpinfo_id',
            'understanding',
            'supporting',
            'intimacy',
            'taking_care_of_kids',
            //'overall_married_life_rating',
            //'divorced_or_separates',
            //'divorce_separation_date',
            //'cmpinfo_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
