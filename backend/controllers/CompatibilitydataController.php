<?php

namespace backend\controllers;

use Yii;
use backend\models\CompatibilityData;
use backend\models\CompatibilitydataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Rashi;

use backend\models\Horoscopedetails;

/**
 * CompatibilitydataController implements the CRUD actions for CompatibilityData model.
 */
class CompatibilitydataController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CompatibilityData models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $searchModel = new CompatibilitydataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompatibilityData model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CompatibilityData model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new CompatibilityData();
        $allrasis =array();
         $rasinames=Rashi::find()->all();
         foreach ($rasinames as $rasi){
         	$allrasis[$rasi->rashiId]=$rasi->rashiName;
         	$alllords[]=$rasi->lord;
         }
         $horoscopeDetails = Horoscopedetails::find()->where(['userId'=>$id])->one();
        // array_unshift($allrasis, "$horoscopeDetails->rashiName");
      
       if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	
        	$model->user_id = $id;
            $model->date_of_birth = date('Y-m-d',strtotime($model->date_of_birth));
        	$model->save();
          return $this->redirect(['users/index']);
        }

        return $this->render('create', [
            'model' => $model,
        	'allrasis' => $allrasis,
        	
        ]);
    }
    
    public function getRashiOrderbyLagna($lagnaRashiId)
    {
    	$allRashiDetails = Rashi::find()->all();
    	$allrashi = array();
    	$addingarray = array();
    	foreach ($allRashiDetails as $rashidetails)
    	{
    		if($rashidetails->rashiId < $lagnaRashiId)
    		{
    			$addingarray[] = $rashidetails->rashiName;
    		}
    		else{
    			$allrashi[] = $rashidetails->rashiName;
    		}
    	}
    	 
    	for($i=0; $i< count($addingarray); $i++)
    	{
    		array_push($allrashi, $addingarray[$i]);
    	}
    	 
    	return $allrashi;
    }

    /**
     * Updates an existing CompatibilityData model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $allrasis =array();
        $rasinames=Rashi::find()->all();
        foreach ($rasinames as $rasi){
        	$allrasis[$rasi->rashiId]=$rasi->rashiName;
        	$alllords[]=$rasi->lord;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->save();
             return $this->redirect(['users/index']);
        }

        return $this->render('update', [
            'model' => $model,
        		'allrasis' => $allrasis,
        ]);
    }

    /**
     * Deletes an existing CompatibilityData model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['users/index']);
    }

    /**
     * Finds the CompatibilityData model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CompatibilityData the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CompatibilityData::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSeventhlord($rashiid)
    {
    	
    	$lord = $this->getRashiOrderbyLagna($rashiid);
    	$Seventhlord=$lord[6];
    	
    	$seventhlordrasi = Rashi::find()->where(['rashiName'=>$Seventhlord])->one();
    	if($seventhlordrasi->lord == 'Jupiter')
    	{
    		 $pseventhlord = $lord[4].','.$lord[8];
    	}
    	elseif($seventhlordrasi->lord == 'Saturn') {
    		 $pseventhlord = $lord[2].','.$lord[9];;
    	}
    	elseif($seventhlordrasi->lord == 'Mars') {
    		$pseventhlord = $lord[3].','.$lord[7];
    	}
    	else {
    		$pseventhlord = $Seventhlord;
    	}
    	
    	return $seventhlordrasi->lord.'+'.$pseventhlord.'+'.$seventhlordrasi->rashiName;
    	
    }
}
