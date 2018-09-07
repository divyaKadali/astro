<?php

namespace backend\controllers;

use Yii;
use backend\models\Horoscopedetails;
use backend\models\Rashi;
use backend\models\HoroscopedetailsSearch;
use backend\models\Planets;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use backend\models\HoroscopePlanets;
use yii\filters\AccessControl;

/**
 * HoroscopedetailsController implements the CRUD actions for Horoscopedetails model.
 */
class HoroscopedetailsController extends Controller
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
     * Lists all Horoscopedetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HoroscopedetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
         //print_r($dataProvider);exit;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Horoscopedetails model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
    	$horoscopemodel = HoroscopePlanets::find()->where(['userid'=>2])->Asarray()->all();
    	//$horoscopemodel = HoroscopePlanets::find()->all();
    	
    	//print_r($horoscopemodel);exit;
    
    	$newarray=array();
     	foreach($horoscopemodel as $horoscope){
    		    		    		
         $newarray[$id] = $horoscope->horoplanetId;
    		
     	}
     	
    	
        return $this->render('newview', [
            'model' => $this->findModel($id),
        	'horoscopemodel' =>$horoscopemodel,
        ]);
    }

    /**
     * Creates a new Horoscopedetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Horoscopedetails();
        $allRashiDetails = Rashi::find()->all();
        $rashilist = array();
        $userslist = array();
        foreach ($allRashiDetails as $droprashi)
        {
        	$rashilist[$droprashi->rashiId] = $droprashi->rashiName;
        }
        //UserList//
        $allUsers = User::find()->where(['status' => 10,'roleId' => 2])->all();
        foreach ($allUsers as $user)
        {
        	$userslist[$user->id] = $user->username;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	

        	for($j=0; $j < 9; $j++)
        	{
        		
        		$horoplanetModel = new HoroscopePlanets();
        	//	$horoplanetModel->horoscopeId = 0;
        		$horoplanetModel->userid = $model->userid;
        		$horoplanetModel->planet = $model->planet[$j];
        		$horoplanetModel->digrees = $model->digrees[$j];
        		$horoplanetModel->strength = $model->strength[$j];
        		$horoplanetModel->nakshatram = $model->nakshatram[$j];
        		$horoplanetModel->rashiname = $model->rashiname[$j];
        		$allrashi = array();
        		$addingarray = array();
        		foreach ($allRashiDetails as $rashidetails)
        		{
        			if($rashidetails->rashiId < $horoplanetModel->rashiname)
        			{
        				$addingarray[] = $rashidetails->lord;
        				
        			}
        			else{
        			        			        				
        			$allrashi[] = $rashidetails->lord;
        			       		
        			}
        			
        		}
        		for($i=0; $i< count($addingarray); $i++)
        		{
        			array_push($allrashi, $addingarray[$i]);
        		}
        
        		$horoplanetModel->lagnaLord =$allrashi[0];
        		$horoplanetModel->dhanaLord =$allrashi[1];
        		$horoplanetModel->kutumbaLord =$allrashi[2];
        		$horoplanetModel->maatruLord =$allrashi[3];
        		$horoplanetModel->putraLord =$allrashi[4];
        		$horoplanetModel->shetruLord =$allrashi[5];
        		$horoplanetModel->kalatraLord =$allrashi[6];
        		$horoplanetModel->shatruLord =$allrashi[7];
        		$horoplanetModel->bhaagyaLord =$allrashi[8];
        		$horoplanetModel->raajayLord =$allrashi[9];
        		$horoplanetModel->laabhaLord =$allrashi[10];
        		$horoplanetModel->vyayaLord =$allrashi[11];
     
        		
        		
        		$horoplanetModel->save();
        	  //print_r($horoplanetModel->rashiName);exit();
        	}
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        	'rashilist'=>$rashilist,
        	//'planetlist' => $planetlist,
        	'userslist' => $userslist
        ]);
    }

    /**
     * Updates an existing Horoscopedetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $horoplanetDetails = HoroscopePlanets::find()->where(['userid' => $id])->all();
        $digrees = array();
        $strengths = array();
        $nakhatrams = array();
        
       foreach ($horoplanetDetails as $horplanet)
        {
        	$digrees[] = $horplanet->digrees;
        	$strengths[] = $horplanet->strength;
        	$nakhatrams[] = $horplanet->nakshatram;
        	$rashilist[] = $horplanet->rashiname;
        }
        
        $model->digrees = $digrees;
        $model->strength = $strengths;
        $model->nakshatram = $nakhatrams;
        $model->rashiname = $rashilist;
        
       // print_r($horoplanetDetails);exit;
        $allRashiDetails = Rashi::find()->all();
        $rashilist = array();
        //$planetlist = array();
        $userslist = array();
        foreach ($allRashiDetails as $droprashi)
        {
        	$rashilist[$droprashi->rashiId] = $droprashi->rashiName;
        }
       
        /* $planetDetails = Planets::find()->all();
        foreach ($planetDetails as $planet)
        {
        	$planetlist[$planet->planetId] = $planet->planetName;
        } */
        
        $allUsers = User::find()->where(['status' => 10,'roleId' => 2])->all();
        foreach ($allUsers as $user)
        {
        	$userslist[$user->id] = $user->username;
        }
        
        
        

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	//echo $model->rashiName;exit();
        	
        	$rashi = Rashi::find()->where(['rashiId'=>$model->rashiId])->one();
        	//$planetinf = Planets::find()->where(['planetId'=>$model->planatId])->one();
        	//print_r($planetinf);exit();
        	
        	$allrashi = array();
        	$addingarray = array();
        	foreach ($allRashiDetails as $rashidetails)
        	{
        		if($rashidetails->rashiId < $rashi->rashiId)
        		{
        		$addingarray[] = $rashidetails->lord;
        		}
        		else{
        			$allrashi[] = $rashidetails->lord;
        		}
        	}
        	for($i=0; $i< count($addingarray); $i++)
        	{
        		array_push($allrashi, $addingarray[$i]);
        	}
        	
        	$model->lagnaLord =$allrashi[0];
        	$model->dhanaLord =$allrashi[1];
        	$model->kutumbaLord =$allrashi[2];
        	$model->maatruLord =$allrashi[3];
        	$model->putraLord =$allrashi[4];
        	$model->shetruLord =$allrashi[5];
        	$model->kalatraLord =$allrashi[6];
        	$model->shatruLord =$allrashi[7];
        	$model->bhaagyaLord	 =$allrashi[8];
        	$model->raajayLord =$allrashi[9];
        	$model->laabhaLord =$allrashi[10];
        	$model->vyayaLord =$allrashi[11];
        	
        	//$model->planatId = $planetinf->planetId;
        	//$model->planatName = $planetinf->planetName;
        	$model->rashiId = $rashi->rashiId;
        	$model->rashiName = $rashi->rashiName;
            $model->updatedBy=Yii::$app->user->id;
        	$model->updatedDate=date('Y-m-d H:i:s');
        	
        	$model->save();
        	
        	for($j=0; $j < 9; $j++)
        	{
        	
        		$horoplanetModel = HoroscopePlanets::find()->where(['horoscopeId' => $model->horId,'planet' => $model->planet[$j]])->one();
        		
        		$horoplanetModel->digrees = $model->digrees[$j];
        		$horoplanetModel->strength = $model->strength[$j];
        		$horoplanetModel->nakshatram = $model->nakshatram[$j];
        		$horoplanetModel->rashiname = $model->rashiname[$j];
        		$allrashi = array();
        		$addingarray = array();
        		foreach ($allRashiDetails as $rashidetails)
        		{
        			if($rashidetails->rashiId < $horoplanetModel->rashiname)
        			{
        				$addingarray[] = $rashidetails->lord;
        		
        			}
        			else{
        		
        				$allrashi[] = $rashidetails->lord;
        		
        			}
        			 
        			 
        		}
        		for($i=0; $i< count($addingarray); $i++)
        		{
        			array_push($allrashi, $addingarray[$i]);
        		}
        		
        		$horoplanetModel->lagnaLord =$allrashi[0];
        		$horoplanetModel->dhanaLord =$allrashi[1];
        		$horoplanetModel->kutumbaLord =$allrashi[2];
        		$horoplanetModel->maatruLord =$allrashi[3];
        		$horoplanetModel->putraLord =$allrashi[4];
        		$horoplanetModel->shetruLord =$allrashi[5];
        		$horoplanetModel->kalatraLord =$allrashi[6];
        		$horoplanetModel->shatruLord =$allrashi[7];
        		$horoplanetModel->bhaagyaLord =$allrashi[8];
        		$horoplanetModel->raajayLord =$allrashi[9];
        		$horoplanetModel->laabhaLord =$allrashi[10];
        		$horoplanetModel->vyayaLord =$allrashi[11];
        		 
        		
        		$horoplanetModel->save();
        		//exit();
        	}
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        	'rashilist'=>$rashilist,
        	//'planetlist' => $planetlist,
        	'userslist' => $userslist
        ]);
    }

    /**
     * Deletes an existing Horoscopedetails model.
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
     * Finds the Horoscopedetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Horoscopedetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Horoscopedetails::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
