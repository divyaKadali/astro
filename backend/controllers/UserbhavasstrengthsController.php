<?php

namespace backend\controllers;

use Yii;
use backend\models\UserBhavasStrengths;
use backend\models\UserbhavasstrengthsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserbhavasstrengthsController implements the CRUD actions for UserBhavasStrengths model.
 */
class UserbhavasstrengthsController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all UserBhavasStrengths models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserbhavasstrengthsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
      //print_r($searchModel);exit;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserBhavasStrengths model.
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
     * Creates a new UserBhavasStrengths model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new UserBhavasStrengths();
        $bhavastrenth = UserBhavasStrengths::find()->where(['userid' => $id])->all();
        if(!empty($bhavastrenth))
        {
        	$bhavam = array();
        	$strengths = array();
        	$userid = array();
        	foreach ($bhavastrenth as $bstrength)
        	{
        		$bhavam[] = $bstrength->bhavam;
        		$strengths[] = $bstrength->strengths;
        		$userid[] = $bstrength->userid;
        		$ubs_id[] = $bstrength->ubs_id;
            }
            $model->bhavam=$bhavam;
            $model->strengths=$strengths;
            $model->userid=$userid;
            $model->ubs_id = $ubs_id;
       }
                
        if ($model->load(Yii::$app->request->post())) {
        	        	
//         	if($model->validate())
//         	{
        	for($j=0; $j<=11; $j++)
        	{
        	if(empty($bhavastrenth))
        		{
        		$bstrength = new UserBhavasStrengths();
        		}
        		else{
        		    $bstrengthidnew = $model->ubs_id[$j];
        		    $bstrength = UserBhavasStrengths::find()->where(['ubs_id' => $bstrengthidnew])->one();
        		}
        		$bstrength->userid = $id;
        	    $bstrength->bhavam = $model->bhavam[$j];
        		$bstrength->strengths = $model->strengths[$j];
                $bstrength->save();
        	    }
        	   return $this->redirect(['users/index']);
        //	}
     }
       return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserBhavasStrengths model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       
        if ($model->load(Yii::$app->request->post()) ) {
        
        	$model->save();
            return $this->redirect(['view', 'id' => $model->ubs_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserBhavasStrengths model.
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
     * Finds the UserBhavasStrengths model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserBhavasStrengths the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserBhavasStrengths::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
