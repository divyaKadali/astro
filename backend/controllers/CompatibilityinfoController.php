<?php

namespace backend\controllers;

use Yii;
use backend\models\CompatibilityInfo;
use backend\models\CompatibilityinfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CompatibilityinfoController implements the CRUD actions for CompatibilityInfo model.
 */
class CompatibilityinfoController extends Controller
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
     * Lists all CompatibilityInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompatibilityinfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompatibilityInfo model.
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
     * Creates a new CompatibilityInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CompatibilityInfo();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        
    
        	if(empty($model->divorce_separation_date )){
        		
        		$model->divorce_separation_date = "0000-00-00";
        		
        	}else{
        		$model->divorce_separation_date = date('Y-m-d',strtotime($model->divorce_separation_date));
        	}
        	
        	$model->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CompatibilityInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           if(empty($model->divorce_separation_date )){
        	
        		$model->divorce_separation_date = "0000-00-00";
        	
        	}else{
        		$model->divorce_separation_date = date('Y-m-d',strtotime($model->divorce_separation_date));
        	}
        	$model->save();
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CompatibilityInfo model.
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
     * Finds the CompatibilityInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CompatibilityInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CompatibilityInfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
