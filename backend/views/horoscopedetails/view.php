<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Horoscopedetails */

$this->title = $model->horId;
$this->params['breadcrumbs'][] = ['label' => 'Horoscopedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horoscopedetails-view">
<div class="box box-primary">
<div class="box-body">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->horId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->horId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'userId',
        		[
        		
        		'attribute'=>'User Name',
        		'value' => function ($data) {
        			$userData = User::find()->where(['id' => $data->userId])->one();
        			return $userData->username;
        		},
        		 
        		],
           
            'rashiName',
            'lagnaLord',
            'dhanaLord',
            'kutumbaLord',
            'maatruLord',
            'putraLord',
            'shetruLord',
            'kalatraLord',
            'shatruLord',
            'bhaagyaLord',
            'raajayLord',
            'laabhaLord',
            'vyayaLord',
            'createdBy',
            'updatedBy',
            'createdDate',
            'updatedDate',
        ],
    ]) ?>

</div>
</div>
</div>
