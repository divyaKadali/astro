<?php

namespace backend\controllers;

use Yii;
use backend\models\HoroscopePlanets;
use backend\models\HoroscopeplanetsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Rashi;
use common\models\User;
use backend\models\HoroscopeplanetsSearchmain;
use backend\models\Nakshatrams;
use backend\models\Users;
use backend\models\Horoscopedetails;
use backend\models\PlanetStrengths;
use backend\models\StrengthsInfo;
use yii\filters\AccessControl;

use yii\db\Query;

use backend\models\PlanetsPositions;
use backend\models\UserDetails;
use backend\models\PredictionByPlanetRaasi;
use backend\models\PredictionLordInOtherLordRaasis;
use backend\models\DailyPlanets;
use backend\models\Planets;


use backend\models\UserBhavasStrengths;
/**
 * HoroscopeplanetsController implements the CRUD actions for HoroscopePlanets model.
 */
class HoroscopeplanetsController extends Controller
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
     * Lists all HoroscopePlanets models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HoroscopeplanetsSearchmain();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HoroscopePlanets model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $id2 =array();
    	$model1 = array();
    	$model = HoroscopePlanets::find()->select('horoplanetId')->where(['userid'=> $id])->all();
    	$userInfo = $userInfo = User::find()->where(['id' => $id])->one();
        $userName =  $userInfo->username;
        
        $horoscopeDetails = Horoscopedetails::find()->where(['userId' => $id])->one();
    	
   foreach($model as $key =>$value)
   {
   	$id2[] = $value;
 //  	print_r($id)
   }
  // exit;
  for($i=0;$i< count($id2);$i++)
  {
  	$model1[] = HoroscopePlanets::find()->where(['userid'=> $id , 'horoplanetId'=> $id2[$i]])->one();
  	
  }
 // print_r($model1);exit;	
        return $this->render('view', [
            'model1' => $model1,
        	'userName' => $userName,
        	'horoscopeDetails' => $horoscopeDetails
        ]);
    }

    /**
     * Creates a new HoroscopePlanets model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
    	$model = new HoroscopePlanets();
    	$horoplanetDetails = HoroscopePlanets::find()->where(['userid' => $id])->all();
    	$horoscopeDetails = Horoscopedetails::find()->where(['userId' => $id])->one();
    	if(!empty($horoscopeDetails))
    	{
    		
    		$model->rashiId = $horoscopeDetails->rashiName;
    	}
    	
    	if(!empty($horoplanetDetails))
    	{
        $digrees = array();
        $strengths = array();
        $nakhatrams = array();
        $rashilist =  array();
        $horoplanetIds = array();
        $shadbalams = array();
        $navamsa_positions = array();
        foreach ($horoplanetDetails as $horplanet)
        {
        	$userid[] = $horplanet->userid;
        	$digrees[] = $horplanet->digrees;
        	$strengths[] = $horplanet->strength;
        	$nakhatrams[] = $horplanet->nakshatram;
        	$rashilist[] = $horplanet->rashiname;
        	$horoplanetIds[] = $horplanet->horoplanetId;
        	$shadbalams[] = $horplanet->shadbalam;
        	$navamsa_positions[] = $horplanet->navamsa_position;
        }
        $model->userid = $id;
        $model->digrees = $digrees;
        $model->strength = $strengths;
        $model->nakshatram = $nakhatrams;
        $model->rashiname = $rashilist;
        $model->horoplanetId = $horoplanetIds;
        $model->shadbalam = $shadbalams;
        $model->navamsa_position = $navamsa_positions;
    	}
        
        $allRashiDetails = Rashi::find()->all();
        $rashilist = array();
        $userslist = array();
        $nakhatramList = array();
        foreach ($allRashiDetails as $droprashi)
        {
        	$rashilist[$droprashi->rashiName] = $droprashi->rashiName;
        }
        //UserList//
        $allUsers = User::find()->where(['status' => 10,'roleId' => 2])->all();
        foreach ($allUsers as $user)
        {
        	$userslist[$user->id] = $user->username;
        }
        
        $allnakshtrams = Nakshatrams::find()->all();
        foreach ($allnakshtrams as $nakhatram)
        {
        	$nakhatramList[$nakhatram->nakhatramName] = $nakhatram->nakhatramName;
        }
        
        $userInfo = Users::find()->select('user.*,user_details.*')->innerJoin('user_details','user.id = user_details.userId')->where(['user.id' => $id])->one();
        //print_r($userInfo);exit();

        if ($model->load(Yii::$app->request->post())) {
        	
        	if($model->validate())
        	{
        	
        	$rashi = Rashi::find()->where(['rashiName'=>$model->rashiId])->one();
        	/* $planetinf = Planets::find()->where(['planetId'=>$model->planatId])->one(); */
        	//print_r($planetinf);exit();
        	 
        	$allrashi = array();
        	$addingarray = array();
        	//print_r($rashi);exit();
        	foreach ($allRashiDetails as $rashidetails)
        	{
        		//print_r($rashidetails->rashiId);
        		if($rashidetails->rashiId < $rashi->rashiId)
        		{
        			$addingarray[] = $rashidetails->lord;
        		}
        		else{
        			$allrashi[] = $rashidetails->lord;
        		}
        	}
        //	exit;
        	for($i=0; $i< count($addingarray); $i++)
        	{
        		array_push($allrashi, $addingarray[$i]);
        	}
        	
        	if(empty($horoscopeDetails))
        	{        	
        	$horoscopeDetails = new Horoscopedetails();
        	}
        	 
        	$horoscopeDetails->lagnaLord =$allrashi[0];
        	$horoscopeDetails->dhanaLord =$allrashi[1];
        	$horoscopeDetails->kutumbaLord =$allrashi[2];
        	$horoscopeDetails->maatruLord =$allrashi[3];
        	$horoscopeDetails->putraLord =$allrashi[4];
        	$horoscopeDetails->shetruLord =$allrashi[5];
        	$horoscopeDetails->kalatraLord =$allrashi[6];
        	$horoscopeDetails->shatruLord =$allrashi[7];
        	$horoscopeDetails->bhaagyaLord	 =$allrashi[8];
        	$horoscopeDetails->raajayLord =$allrashi[9];
        	$horoscopeDetails->laabhaLord =$allrashi[10];
        	$horoscopeDetails->vyayaLord =$allrashi[11];
        	 
        	//$model->planatId = $planetinf->planetId;
        	//$model->planatName = $planetinf->planetName;
        	
        	$horoscopeDetails->rashiId = $rashi->rashiId;
        	$horoscopeDetails->rashiName = $rashi->rashiName;
        	$horoscopeDetails->userId =$id;
        	$horoscopeDetails->createdBy=Yii::$app->user->id;
        	$horoscopeDetails->createdDate=date('Y-m-d H:i:s');
        	 
        	$horoscopeDetails->save();
        	
        	$horoId = $horoscopeDetails->horId;
        	

        	for($j=0; $j < 9; $j++)
        	{
        		
        		 if(empty($horoplanetDetails))
        		{
        			
        		$horoplanetModel = new HoroscopePlanets();
        		}
        		else{
        			//echo 'hello';exit();
        			$horoscopeplanetIdnew = $model->horoplanetId[$j];
        			$horoplanetModel = HoroscopePlanets::find()->where(['horoplanetId' => $horoscopeplanetIdnew])->one();
        		} 
        		//echo 'hello2';exit();
        		
        		//$horoplanetModel = new HoroscopePlanets();
        		$horoplanetModel->horoscopeId = $horoId;
        		$horoplanetModel->userid = $id;
        		$horoplanetModel->rashiId = $model->rashiId;
        		$horoplanetModel->planet = $model->planet[$j];
        		$horoplanetModel->digrees = $model->digrees[$j];
        		$horoplanetModel->strength = $model->strength[$j];
        		$horoplanetModel->nakshatram = $model->nakshatram[$j];
        		$horoplanetModel->rashiname = $model->rashiname[$j];
        		$horoplanetModel->shadbalam = $model->shadbalam[$j];
        		$horoplanetModel->navamsa_position = $model->navamsa_position[$j];
        		
     
        		
        		
        		$horoplanetModel->save();
        		//print_r($horoplanetModel->errors);exit();
        	}
           // return $this->redirect(['view', 'id' => $model->horoplanetId]);
        	return $this->redirect(['view','id' => $id]);
        	}
        	else{
        		print_r($model->errors);exit();
        	}
        }

//         return $this->render('create', [
//             'model' => $model,
//         ]);
        return $this->render('create', [
        		'model' => $model,
        		'rashilist'=>$rashilist,
        		//'planetlist' => $planetlist,
        		'userslist' => $userslist,
        		'nakhatramList' => $nakhatramList,
        		'userInfo' => $userInfo
        ]);
    }

    /**
     * Updates an existing HoroscopePlanets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
 public function actionHoroscopeanalysis($id)
    {
 	  $allData = array();
 	  $userDetails = UserDetails::find()->select("user.*,user_details.*")->innerJoin("user","user.id = user_details.userId")->where("user_details.userId = $id")->one();
 	  $horoscopeDetails = HoroscopePlanets::find()->select("horoscopedetails.rashiId,horoscopedetails.lagnaLord as lagnaLordinfo,horoscopedetails.rashiName as lagnaRashi,horoscope_planets.*")->innerJoin("horoscopedetails","horoscopedetails.horId = horoscope_planets.horoscopeId")->where("horoscope_planets.userid = $id")->orderBy('horoplanetId ASC')->all();
 	  $lagnaRashiNameNew = '';
 	  $bhavam = $this->Bhavam($id);
 	 
 	  //** new table bhavam of strengths **//
 	  $UserBhavasStrengths=UserBhavasStrengths::find()->where(['userid'=>$id])->all();
 	  $bhavam1 = array();
 	  $strengths = array();
 	  
 	  if(empty($UserBhavasStrengths)){
 	  	$bhavam1 = [];
 	  	$strengths =[];
 	  }
 	  	else{
 	  foreach($UserBhavasStrengths as $bs )
 	  {
 	  $bhavam1[] = $bs->bhavam;
 	  $strengths[] = $bs->strengths;
 	   }
 	  	}
 	
  	  
 	  //** new table bhavam of strengths **//
 	 
 	  if(!empty($horoscopeDetails))
 	  { 	  	
 	  	$reshiOrders = $this->getRashiOrderbyLagna($horoscopeDetails[0]->rashiId);
 	  	$lordOrders = $this->getRashiOrderbyLagnaLord($horoscopeDetails[0]->rashiId);
 	  	$moonSign = $horoscopeDetails[0]->rashiname;
 	  	$moonSignOrders = $this->getRashiOrderbyLagnaByname($moonSign);
 	  	$currentDate = date('Y-m-d'); 	  	
 	  	$dailyPlanetsInfo = DailyPlanets::find()->where("DATE(planet_date) = '$currentDate'")->one();
 	  	//print_r($dailyPlanetsInfo);exit;
 	  	$lagnaRashiNameNew = $horoscopeDetails[0]->lagnaRashi; 	  	
 	  	$i = 0;
 	  	foreach ($horoscopeDetails as $lagnaAnalysis)
 	  	{
 	  		$planet = ucfirst(strtolower($lagnaAnalysis->planet));
 	  		$key = array_search ($lagnaAnalysis->rashiname, $reshiOrders);
    		$pos = $key+1;
 	  		$lagnaAnalysisData = PredictionByPlanetRaasi::find()->where(['position_id' => $pos])->one();
 	  		$allData[$i]['planetName'] = strtoupper($planet);
 	  		$allData[$i]['rashiName'] = $lagnaAnalysis->rashiname;
 	  		$allData[$i]['lagnaanlysisData'] = $lagnaAnalysisData->$planet;
 	  		if($planet !='Rahu'&& $planet != 'Ketu')
 	  		{
 	  		$lordPlanet = $lordOrders[$planet];
 	  		$combineLordInfo = '';
 	  		for($m=0;$m<count($lordPlanet);$m++)
 	  		{
 	  			$lordPos = $lordPlanet[$m]+1;
 	  			$lordNewDetails = PredictionLordInOtherLordRaasis::find()->where(['plord_rasiid' => $lordPos])->one();
 	  			$poscalc = 'position'.$pos;
 	  			$combineLordInfo .= $lordNewDetails->$poscalc.' ';
 	  		}
 	  		$allData[$i]['lordplanetInfo'] = $combineLordInfo;
 	  		if($dailyPlanetsInfo){
 	  		$gochkey = array_search ($dailyPlanetsInfo->$planet, $moonSignOrders);
 	  		$gochpos = $gochkey+1;
 	  		$planetPosInfo = PlanetsPositions::find()->where(['position_id' => $gochpos])->one();
 	  		$allData[$i]['gocharamInfo'] = $planetPosInfo->$planet;
 	  		
 	  		}else{
 	  			$allData[$i]['gocharamInfo'] = " ";
 	  		}
 	  		}
 	  		else{
 	  			$allData[$i]['lordplanetInfo'] = '';
 	  			$allData[$i]['gocharamInfo'] = '';
 	  		}
 	  		
 	  		$i++;
 	  	}
 	  }
    	return $this->render('Horoscopeanalisies', [
    			'allData' => $allData,
    			'userDetails' => $userDetails,
    			'lagnaRashiNameNew' => $lagnaRashiNameNew,
    			'bhavam' =>$bhavam,
    			'bhavam1' =>$bhavam1,
    			'strengths' =>$strengths
    	        ]);
    }
    
    public function actionHoroscopeanalysisnew($id)
    {
    	/*
    	 * user details
    	 */
    	$Users = Users::find()->where(['id' => $id])->one();
    	$UserDetails = UserDetails::find()->where(['userid' => $id])->one();
    	 
    	$planets = array();
    	$gochara_values = array();
    	$analysisbylagna = array();
    	$analysisbylord = array();
    	 
    	$rashi=array();
    	$lagna_rashi_id = array();
    	/*
    	 * user id based get hrs-planets details Planet,Rasiname
    	 */
    	$hrs_planetas = HoroscopePlanets::find()->where(['userid' => $id])->all();
    	 
    	 
    	foreach($hrs_planetas as $hrs_planeta )
    	{
    		$rashi[] = $hrs_planeta->rashiname; /* we selected planet wise Rasi name */
    
    		$planet = ucfirst(strtolower($hrs_planeta->planet)); /*  Planet name */
    		 
    		$allRashiDetails = Rashi::find()->all();
    		 
    		$rashi_id=Rashi::find()->select('rashiId')->where(['rashiName'=>$hrs_planeta->rashiname])->one();
    		 
    		/*
    		 *  User selected lagna lord ID
    		 */
    		$lagna_rashi_id = Horoscopedetails::find()->where(['horId'=>$hrs_planeta->horoscopeId])->one();
    
    		/*
    		 *Analysis by lord  code
    		 *User selected lagna lord name
    		 */
    		$gochara_rashi_id=Rashi::find()->where(['lord'=>$lagna_rashi_id->lagnaLord])->one();
    		//print_r($gochara_rashi_id);exit();
    		$langnaRashi = $gochara_rashi_id->rashiName;
    		$langnaLord = $gochara_rashi_id->lord;
    		$hrs_planetas1 = HoroscopePlanets::find()->select('rashiname')->where(['planet' => $gochara_rashi_id->lord,'userid' => $id])->one();
    		/*
    		 * rasi ID
    		 */
    		$g_rashi_id=Rashi::find()->select('rashiId')->where(['rashiName'=>$hrs_planetas1->rashiname])->one();
    
    
    		$count = 0;
    		$horoscopeplanets = '';
    		 
    		$position = array();
    		$addingarray = array();
    		$allrashi = array();
    		$newRashiDetails = array();
    		$gocharaposition = array();
    		$ary = array();
    		$gochararray = array();
    
    		 
    
    		foreach ($allRashiDetails as  $rashidetails){
    			if($rashidetails->rashiId < $lagna_rashi_id->rashiId)
    			{
    				$addingarray[] = $rashidetails->rashiId;
    				$lordaddingarray[] = $rashidetails->lord;
    
    			}
    			else{
    				$allrashi[] = $rashidetails->rashiId;/* All rotated rasi's*/
    				$alllords[] = $rashidetails->lord;/* All rotated lord's */
    			}
    		}
    
    
    		/*
    		 * Analysis code  for position
    		 */
    
    		for($i=0; $i<count($addingarray); $i++)
    		{
    			array_push($allrashi, $addingarray[$i]);
    		}
    		 
    		$keynew = array_search ($rashi_id->rashiId, $allrashi);
    		$posnew = $keynew+1;
    		 
    		//$count = count($position)+1;
    		 
    		//     	$PlanetsPositions =PlanetsPositions::find()->where(['position_id'=> $posnew])->one();
    		//     	$horoscopeplanets = $PlanetsPositions->$planet;
    		//     	$analysisbygochara[] = $horoscopeplanets;
    		 
    		/*
    		 * Analysis by lagna  code  for position
    		 */
    		 
    		$PlanetsPositionsLord =PredictionByPlanetRaasi::find()->where(['position_id'=> $posnew])->one();
    		$horoscopeplanetsLord = $PlanetsPositionsLord->$planet;
    		$analysisbylagna[] = $horoscopeplanetsLord;
    		 
    		/*
    		 * Analysis by lord  code
    		 * Analysis by lord of all lords
    		 * get selected first lord position
    		 */
    
    		for($i=0; $i<count($lordaddingarray); $i++)
    		{
    			array_push($alllords, $lordaddingarray[$i]);
    		}
    		$keyold = array_search ($g_rashi_id->rashiId, $allrashi);
    		$posold = $keyold+1;
    		$Glord = PredictionLordInOtherLordRaasis::find()->where(['lord' => "lord1"])->asArray()->one();
    		$value= $Glord['position'.$posold];
    		 
    		$planetOverall = array();
    		$planetOverall[$gochara_rashi_id->lord][] = $value;
    		/*
    		 * for loop start on secont lord
    		 */
    		 
    
    			
    		for($i=1;$i<count($alllords); $i++)
    		{
    			$lord = $alllords[$i]; /* lord name */
    			/*
    			 * $lord Of rasiname
    			 */
    
    			$hrs_lord_planetas = HoroscopePlanets::find()->select('rashiname')->where(['planet' => $lord,'userid' => $id])->one();
    			/*
    			 * $hrs_lord_planetas of RASIID
    			 */
    			$glord_rashi_id = Rashi::find()->select('rashiId')->where(['rashiName'=>$hrs_lord_planetas->rashiname])->one();
    			/*
    			 * Analysis by lord  code  for position
    			 */
    			$key = array_search ($glord_rashi_id->rashiId, $allrashi);
    			$pos = $key+1;
    			$total = $i+1;
    			$congl = 'lord'.$total;
    			$G_newlord = PredictionLordInOtherLordRaasis::find()->where(['lord' =>$congl])->asArray()->one();
    			$planetOverall[$lord][] = $G_newlord['position'.$pos];
    
    			//print_r($planetOverall);exit;
    			 
    		}
    		 
    		/*
    		 * Analysis by gochara
    		 */
    
    		$gocharaaddingarray=array();
    		$gocgaraallrashi = array();
    		$gochraplanetOverall =array();
    		$new_gochara_all_lords = array();
    		 
    		foreach ($allRashiDetails as  $gochararashidetails){
    			if($gochararashidetails->rashiId < $rashi_id->rashiId)
    			{
    				$gocharaaddingarray[] = $gochararashidetails->rashiId;
    
    			}
    			else{
    				$gocgaraallrashi[] = $gochararashidetails->rashiId;/* All rotated rasi's*/
    			}
    		}
    		 
    		for($i=0; $i<count($gocharaaddingarray); $i++)
    		{
    			array_push($gocgaraallrashi, $gocharaaddingarray[$i]);
    		}
    		 
    		$gochara_all_lords= Planets::find()->select('planetName')->orderby('planetId')->asArray()->all();
    		for($i=0;$i<count($gochara_all_lords)-2; $i++)
    		{
    			$new_gochara_all_lords []= $gochara_all_lords[$i];
    		}
    		 
    		$DailyPlanets = DailyPlanets::find()->where(['Like' , 'planet_date', date('Y-m-d')])->one();
    		 
    		 
    		 
    		for($k =0 ;$k< count($new_gochara_all_lords);$k++)
    		{
    
    			$gochararashi_id=$DailyPlanets[$new_gochara_all_lords[$k]['planetName']];
    			$gocharam_rashi_id = Rashi::find()->where(['rashiName'=>$gochararashi_id])->one();
    			$gocharaposition = array_search($gocharam_rashi_id['rashiId'],$gocgaraallrashi);
    			if(!empty($gocharaposition)){
    				$gocharaposition =$gocharaposition+1;
    			}else{
    				$gocharaposition ="";
    			}
    
    			$Gochara_newlord = PlanetsPositions::find()->Select($new_gochara_all_lords[$k]['planetName'])->where(['position_id' =>$gocharaposition])->asArray()->one();
    			$gochraplanetOverall[] = $Gochara_newlord;
    
    		}
    
    		//	print_r($planetOverall['Jupiter']);exit;
    		    		
    	}
    	return $this->render('Horoscopeanalisies', [
    			//  'analysisbygochara' => $analysisbygochara,
    			'UserDetails' =>$UserDetails,
    			'rashi' =>$rashi,
    			'lagna_rashi_id' =>$lagna_rashi_id,
    			'Users' =>$Users,
    			'analysisbylagna' =>$analysisbylagna,
    			'gochara_values'=>$gochara_values,
    			 
    			'planetOverall' => $planetOverall,
    			'gochraplanetOverall'=>$gochraplanetOverall
    	]);
    }
    
    
    public function actionUpdate($id)
    {
        $model = new HoroscopePlanets();
        
        $horoplanetDetails = HoroscopePlanets::find()->where(['userid' => $id])->all();
        $digrees = array();
        $strengths = array();
        $nakhatrams = array();
        $rashilist =  array();
        $horoplanetIds = array();
        $shadbalams = array();
        $navamsa_positions = array();
        foreach ($horoplanetDetails as $horplanet)
        {
        	$userid[] = $horplanet->userid;
        	$digrees[] = $horplanet->digrees;
        	$strengths[] = $horplanet->strength;
        	$nakhatrams[] = $horplanet->nakshatram;
        	$rashilist[] = $horplanet->rashiname;
        	$horoplanetIds[] = $horplanet->horoplanetId;
        	$shadbalams[] = $horplanet->shadbalam;
        	$navamsa_positions[] = $horplanet->navamsa_position;
        }
        $model->userid = $id;
        $model->digrees = $digrees;
        $model->strength = $strengths;
        $model->nakshatram = $nakhatrams;
        $model->rashiname = $rashilist;
        $model->horoplanetId = $horoplanetIds;
        $model->shadbalam = $shadbalams;
        $model->navamsa_position = $navamsa_positions;
        
        
        $allRashiDetails = Rashi::find()->all();
        $rashilist = array();
        $userslist = array();
        $nakhatramList = array();
        foreach ($allRashiDetails as $droprashi)
        {
        	$rashilist[$droprashi->rashiName] = $droprashi->rashiName;
        }
        //UserList//
        $allUsers = User::find()->where(['status' => 10,'roleId' => 2])->all();
        foreach ($allUsers as $user)
        {
        	$userslist[$user->id] = $user->username;
        }
        $allnakshtrams = Nakshatrams::find()->all();
        foreach ($allnakshtrams as $nakhatram)
        {
        	$nakhatramList[$nakhatram->nakhatramName] = $nakhatram->nakhatramName;
        }

     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	

        	for($j=0; $j < 9; $j++)
        	{
        		
        		$horoscopeplanetIdnew = $model->horoplanetId[$j];
        		$horoplanetModel = HoroscopePlanets::find()->where(['horoplanetId' => $horoscopeplanetIdnew])->one();
        	//	$horoplanetModel->horoscopeId = 0;
        		$horoplanetModel->userid = $model->userid;
        		$horoplanetModel->planet = $model->planet[$j];
        		$horoplanetModel->digrees = $model->digrees[$j];
        		$horoplanetModel->strength = $model->strength[$j];
        		$horoplanetModel->nakshatram = $model->nakshatram[$j];
        		$horoplanetModel->rashiname = $model->rashiname[$j];
        		$horoplanetModel->shadbalam = $model->shadbalam[$j];
        		$horoplanetModel->navamsa_position = $model->navamsa_position[$j];
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
        	}
             return $this->redirect(['index']);
        }

//         return $this->render('update', [
//             'model' => $model,
//         ]);
        return $this->render('update', [
        		'model' => $model,
        		'rashilist'=>$rashilist,
        		//'planetlist' => $planetlist,
        		'userslist' => $userslist,
        		'nakhatramList' => $nakhatramList
        ]);
    }

    /**
     * Deletes an existing HoroscopePlanets model.
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
     * Finds the HoroscopePlanets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HoroscopePlanets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HoroscopePlanets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionStrengths($rashi,$planet)    
    {
   
    		$query=PlanetStrengths::find()->select($planet)->Where(['rashiName'=>$rashi])->one();
    		
            $trengthsInfo=StrengthsInfo::find()->select('strengthPercentage')->Where(['strengthName'=>$query[$planet]])->one();
         
           return $trengthsInfo['strengthPercentage'];exit();
           
          //  print_r($rashi);exit;
            
    
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
    
    public function getRashiOrderbyLagnaLord($lagnaRashiId)
    {
    	$allRashiDetails = Rashi::find()->all();
    	$allrashi = array();
    	$addingarray = array();
    	$planetorderPos = array();
    	foreach ($allRashiDetails as $rashidetails)
    	{
    		if($rashidetails->rashiId < $lagnaRashiId)
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
    	for($k=0; $k< count($allrashi); $k++)
    	{
    		$planetorderPos[$allrashi[$k]][] = $k;
    	}
    	/* print_r($allrashi);
    	print_r($planetorderPos);
    	exit(); */
    	 
    	//return $planetorderPos.'+'.$pseventhlord;
    	return $planetorderPos;
      
    }
    
    public function getRashiOrderbyLagnaByname($lagngaRashiname)
    {
    	$rashi = Rashi::find()->where(['rashiName'=>$lagngaRashiname])->one();
    	$allRashiDetails = Rashi::find()->all();
    	$allrashi = array();
    	$addingarray = array();
    	foreach ($allRashiDetails as $rashidetails)
    	{
    		if($rashidetails->rashiId < $rashi->rashiId)
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
    public function bhavam($id)
    {
    	$horoscopeDetails = HoroscopePlanets::find()->select("horoscopedetails.rashiId,horoscopedetails.lagnaLord as lagnaLordinfo,horoscopedetails.rashiName as lagnaRashi,horoscope_planets.*")->innerJoin("horoscopedetails","horoscopedetails.horId = horoscope_planets.horoscopeId")->where("horoscope_planets.userid = $id")->orderBy('horoplanetId ASC')->all();
    	// strengths//// planets strengths
    	$lagnarasiid= array();
    	$strengths= array();
    	foreach ($horoscopeDetails as $horplanet)
    	{
    	    $strengths[$horplanet->planet] = $horplanet->strength; 
    	    $lagnarasiid = $horplanet->rashiId;// lagna rasiid
    	}
    	
    		
    	// Lord //
    	$allRashiDetails = Rashi::find()->all();
    	$allrashi = array();
    	$addingarray = array();
    	foreach ($allRashiDetails as $rashidetails)
    	{
    		if($rashidetails->rashiId < $lagnarasiid)
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
    	if (empty($strengths))
    	{
    	$bhavasarray[] = " ";
    	}else{
    	
    	$bhavasarray =array();
		for($i=0;$i<count($allrashi);$i++)
		{
			$bhavasarray[]= $strengths[strtoupper($allrashi[$i])];
		}
    	}
		
		return $bhavasarray;
    	
    
    }
    
     
    
}
