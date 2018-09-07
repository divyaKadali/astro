<?php

namespace backend\controllers;

use Yii;
use backend\models\DailyPlanets;
use backend\models\DailyplanetsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Rashi;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * DailyplanetsController implements the CRUD actions for DailyPlanets model.
 */
class DailyplanetsController extends Controller
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
    							'index','create','update','view','delete','upload'
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
     * Lists all DailyPlanets models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DailyplanetsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DailyPlanets model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
 public function actionView($id)
    {
    	
    	$modeldate =DailyPlanets::find()->select('planet_date')->where(['dpId'=>$id])->one();
    	$planetdate= date('d-M-Y H:i:s A',strtotime($modeldate->planet_date));
    	
    	 //print_r($model->planet_date);exit;
    	
    	
        return $this->render('view', [
            'model' => $this->findModel($id),
        	'planetdate' => $planetdate,
        ]);
    }

    /**
     * Creates a new DailyPlanets model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DailyPlanets();
        $model->scenario = 'create';
        $rashilist = array();
        $rashi = Rashi::find()->all();
       foreach ($rashi as $r)
       {
       	$rashilist['']="Select Rashi";
       	$rashilist[$r->rashiName]=$r->rashiName;
       }

        if ($model->load(Yii::$app->request->post())) {
        	$date = date('Y-m-d H:i:s',strtotime($model->planet_date));
        	$planetdate = date('d-M-Y H:i:s',strtotime($model->planet_date));
        	$model->planet_date = $date;
            if($model->validate())
            {
            	
            	$model->save();
            }
            else {
            	$model->planet_date = date('d-M-Y H:i:s',strtotime($model->planet_date));
            	return $this->render('create', [
            			'model' => $model,
            			'rashilist'=>$rashilist
            	]);
            }
        	
            return $this->redirect(['view', 'id' => $model->dpId]);
        }

        return $this->render('create', [
            'model' => $model,
        		'rashilist'=>$rashilist
        ]);
    }

    /**
     * Updates an existing DailyPlanets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        
	
        $modeldate =DailyPlanets::find()->select('planet_date')->where(['dpId'=>$id])->one();
        $model = $this->findModel($id); 
       // print_r($model->Ketu);exit;
        $model->planet_date= date('d-M-Y H:i:s',strtotime($modeldate->planet_date));
       
        $rashilist = array();
        $rashi = Rashi::find()->all();
        foreach ($rashi as $r)
        {
        	$rashilist['']="Select Rashi";
        	$rashilist[$r->rashiName]=$r->rashiName;
        }
		//print_r($rashilist);exit;
        if ($model->load(Yii::$app->request->post())) {
        $date = date('Y-m-d H:i:s',strtotime($model->planet_date));
        	$planetdate = date('d-M-Y H:i:s',strtotime($model->planet_date));
        	$model->planet_date = $date;
            if($model->validate())
            {
            	
            	$model->save();
            }
            else {
            	$model->planet_date = date('d-M-Y H:i:s',strtotime($model->planet_date));
            	return $this->render('create', [
            			'model' => $model,
            			'rashilist'=>$rashilist
            	]);
            }
            return $this->redirect(['view', 'id' => $model->dpId]);
        }

        return $this->render('update', [
            'model' => $model,
        	'rashilist'=>$rashilist
        ]);
    }

    /**
     * Deletes an existing DailyPlanets model.
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
     * Finds the DailyPlanets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DailyPlanets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DailyPlanets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionUpload()
    {
    	
    	$model = new DailyPlanets();
    	$model->scenario = 'upload';
    	if($model->load(Yii::$app->request->post()))
    	{
    		$file =  UploadedFile::getInstance($model,'file');
    		$filename = 'Data.'.$file->extension;
    		$upload = $file->saveAs('uploads/'.$filename);
    		if($upload){
    			define('CSV_PATH','uploads/');
    			$csv_file = CSV_PATH . $filename;
    			  $filecsv = file($csv_file); 
    			
    			  for($i = 0;$i<count($filecsv);$i++){ 
    			  	if($i > 0)
    			  	{
    			  	$planet = explode(",",$filecsv[$i]);
    			  	$modelnew = new DailyPlanets();
    			  	$planetdate = date('Y-m-d H:i:s',strtotime($planet[0]));
    			 // print_r($planetdate);exit;
    			  	$modelnew->planet_date = $planetdate;
    			  	$modelnew->Moon = $planet[1];    			  
    			  	$modelnew->Jupiter = $planet[2];
    			  	$modelnew->Mercury = $planet[3];
    			  	$modelnew->Sun = $planet[4];
    			  	$modelnew->Mars = $planet[5];
    			  	$modelnew->Venus = $planet[6];
    			  	$modelnew->Saturn = $planet[7];
    			  	/* $modelnew->Rahu = $planet[8];
    			  	$modelnew->Ketu = $planet[9]; */
    			  	$modelnew->save();
    			  	//print_r($modelnew->errors);exit;   
    			  	}
    			  }
    			 
    			  //unlink('uploads/'.$filename);
    			  return $this->redirect(['index']);
    		}
    		
    		
    	}
    	else {
    		return $this->render('upload',['model'=>$model]);
    	}
    	  	
    }
}
