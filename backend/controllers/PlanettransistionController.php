<?php

namespace backend\controllers;

use Yii;
use backend\models\PlanetTransistion;
use backend\models\PlanetTransistionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PlanettransistionController implements the CRUD actions for PlanetTransistion model.
 */
class PlanettransistionController extends Controller
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
     * Lists all PlanetTransistion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlanetTransistionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PlanetTransistion model.
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
     * Creates a new PlanetTransistion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PlanetTransistion();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	
        	$model->createdBy=Yii::$app->user->id;
        	$model->createdDate=date('Y-m-d H:i:s');
        	 
        	$model->save();
            return $this->redirect(['view', 'id' => $model->planetTransId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PlanetTransistion model.
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
            return $this->redirect(['view', 'id' => $model->planetTransId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PlanetTransistion model.
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
     * Finds the PlanetTransistion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PlanetTransistion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PlanetTransistion::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}