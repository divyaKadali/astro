<?php

namespace backend\controllers;

use Yii;
use backend\models\Planets;
use backend\models\PlanetsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PlanetsController implements the CRUD actions for Planets model.
 */
class PlanetsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        		'access' => [
        				'class' => AccessControl::className(),
        				'only' => [
        						'index','create','update','view','delete'
        				],
        				'rules' => [
        						[
        				
        								'allow' => true,
        								'roles' => ['@'],
        				
        						],
        				]
        		],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Planets models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlanetsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Planets model.
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
     * Creates a new Planets model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Planets();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	
        	$model->createdBy=Yii::$app->user->id;
        	$model->createdDate=date('Y-m-d H:i:s');
        	$model->save();
            //return $this->redirect(['view', 'id' => $model->planetId]);
        	return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Planets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->updatedBy=Yii::$app->user->id;
        	$model->updatedDate=date('Y-m-d H:i:s');
        	$model->save();
           // return $this->redirect(['view', 'id' => $model->planetId]);
        	return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Planets model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Planets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Planets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Planets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    


    public function actionDashacalculation()
    {
    	$dashaName = "Mars";
    	$dashaYears = 7;
    	$startDate = '1971-11-12';
    	$dashaStartDate = '1971-11-12';
    	$calcdate = "1971-11-12"; //existing date
    	$dashaStartDate = strtotime($dashaStartDate);
    	$dashaEndDate = strtotime('+ '.$dashaYears.' year', $dashaStartDate);
    	$dashaEndDate =  date('Y-m-d', $dashaEndDate);
    	$result= array();
    	$result['Mars']['startDate'] = $startDate;
    	$result['Mars']['endDate'] = $dashaEndDate;
    	$marsStaticCalc = 7/120;
    	$secondDays = ($marsStaticCalc*7)*365;
    	$secondEndDate =  strtotime('+'.ceil($secondDays).' day', $dashaStartDate);
    	$secondEndDate =  date('Y-m-d', $secondEndDate);
    	$result['Mars']['Mars']['startDate'] = $startDate;
    	$result['Mars']['Mars']['endDate'] = $secondEndDate;
    	print_r($result);exit();
    
    }
}
