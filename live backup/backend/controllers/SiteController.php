<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

use backend\models\Users;
use backend\models\Planets;

use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\AstroDeviceInfo;

use sngrl\PhpFirebaseCloudMessaging\Client;
use sngrl\PhpFirebaseCloudMessaging\Message;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Device;
use sngrl\PhpFirebaseCloudMessaging\Notification;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
            		'only' => ['resetpassword'],
                'rules' => [
                    [
                        'actions' => ['login', 'error','requestpasswordreset','dashas','dynamicdashas','resetpassword','changemoonsign'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','dashas','dynamicdashas','changemoonsign'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                		
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

    $this->redirect(['site/login']);
    }
    
    
    
    public function actionRequestpasswordreset()
    {
      $this->layout= 'main-login';
        $model = new PasswordResetRequestForm();
    	$result = array();
    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		if ($model->sendEmail()) {
    				Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
       		} else {
    				Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
    		}
    	}
    	return $this->render('requestPasswordResetToken', [
    	    			'model' => $model,
    	    	]);
    }
    
    public function actionResetPassword($token)
    {
    	
    	$this->layout= 'main-login';
    	
    	try {
    		
    		$model = new ResetPasswordForm($token);
    		
    	} catch (InvalidParamException $e) {
    		throw new BadRequestHttpException($e->getMessage());
    	}
    
    	if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    		Yii::$app->getSession()->setFlash('success', 'New password was saved.');
    
    		return $this->goHome();
    	}
    
    	return $this->render('resetPassword', [
    			'model' => $model,
    	]);
    }
    
public function actionDashas($id)
    {
    	$this->layout = false;
    	

    	//ini_set('memory_limit', '-1');
    	/* $date = date_create('2000-01-01');
    	 date_add($date, date_interval_create_from_date_string('19000 days'));
    	 echo date_format($date, 'Y-m-d'); */
    	 
    	//print_r($time) ;exit();
    	$usersInfo = Users::find()->select('user.*,user_details.*')->innerJoin('user_details','user.id = user_details.userId')->where(['user.id' => $id])->one();
    	$planetsInfo = Planets::find()->select('planetId,planetName,dasha_years')->asArray()->orderBy('dasha_order ASC')->all();
    	//print_r($planetsInfo);exit();
    	$isdashaid = 0;
    	$previousarry = array();
    	$presntarry = array();
    	$newcurrentAry = array();
    	//$currentPlanet = '';
    	
    	for($k=0; $k<count($planetsInfo); $k++)
    	{
    		$planetId = $planetsInfo[$k]['planetId'];
    		
    		$dashaidnew = $usersInfo->dasa_at_birth;
    		//echo $planetId;
    		//echo $dashaidnew;
    		//print_r($planetsInfo[$k]);
    		//exit();
    		if($planetId == $dashaidnew)
    		{
    			$isdashaid = 1;
    			$newcurrentAry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
    			//$currentPlanet = $planetsInfo[$k]['planetName'];
    		}
    		if($isdashaid == 0)
    		{
    			$previousarry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
    		}
    		else{
    			$presntarry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
    		}
    	
    	
    	}
    	//echo $currentPlanet;
    	//print_r($newcurrentAry);exit();
    	 
    	$filterArray = array_merge($presntarry,$previousarry);
    	$finalAry = array();
    	$p = 0;
    	$prevDate = date('Y-m-d H:i:s');
    	array_shift($filterArray);
    	$filterArray = array_merge($filterArray,$newcurrentAry);
    	//$filterArray = 
    	
    	//print_r($filterArray);exit();
    	
    	foreach ($filterArray as $k1 => $v1)
    	{
    		
    		if($p == 0)
    		{
    			$finalAry[$p]['from_date']= $usersInfo->dasa_end_date;
    		}
    		else{
    			$pt = $p-1;
    			$finalAry[$p]['from_date'] = $finalAry[$pt]['end_date'];
    		}
    	
    		$nofDays = $v1*365;
    		$date = date_create($finalAry[$p]['from_date']);
    		date_add($date, date_interval_create_from_date_string($v1.' years'));
    		$endDateconv =  date_format($date, 'Y-m-d H:i:s');
    		$finalAry[$p]['end_date'] = $endDateconv;
    		$finalAry[$p]['planet'] = $k1;
    		$finalAry[$p]['nofDays'] = $nofDays;
    		$prevDate = $endDateconv;
    		$p++;
    	
    	}
    	//print_r($finalAry);exit();
    	
    	return $this->render('dashas', ['finalAry' => $finalAry,'userId' => $id]);
    }
    
   public function actionDynamicdashas()
   {
   	 $this->layout = false;
   	 $v1 = $_GET['nodays'];
   	 $fromDate = $_GET['fromdate'];
   	 $childno = $_GET['childno'];
   	 $parentid = $_GET['parentid'];
   	 $id = $_GET['useridnew'];
   	 $planetName = $_GET['planetname'];
   	
   	 
   	 $usersInfo = Users::find()->select('user.*,user_details.*')->innerJoin('user_details','user.id = user_details.userId')->where(['user.id' => $id])->one();
   	 $planetsInfo = Planets::find()->select('planetId,planetName,dasha_years')->asArray()->orderBy('dasha_order ASC')->all();
   	 $isdashaid = 0;
   	 $previousarry = array();
   	 $presntarry = array();
   	 $newcurrentAry = array();
   	 for($k=0; $k<count($planetsInfo); $k++)
   	 {
   	 	$planetId = $planetsInfo[$k]['planetId'];
   	 	$planet = $planetsInfo[$k]['planetName'];
   	 	$dashaidnew = $usersInfo->dasa_at_birth;
   	 	if($planet == $planetName)
   	 	{
   	 		$isdashaid = 1;
   	 		$newcurrentAry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
   	 	}
   	 	if($isdashaid == 0)
   	 	{
   	 		$previousarry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
   	 	}
   	 	else{
   	 		$presntarry[$planetsInfo[$k]['planetName']] = $planetsInfo[$k]['dasha_years'];
   	 	}
   	 	 
   	 	 
   	 }
   	 
   	 $filterArray = array_merge($presntarry,$previousarry);
   	 /* array_shift($filterArray);
   	 $filterArray = array_merge($filterArray,$newcurrentAry); */
   	 $finalAry = array();
   	 
   	 
   	 $prevDate2 = date('Y-m-d H:i:s');
   	 $p2 = 0;
   	 
   	 
   	 $html = '';
   	 
   	 
   	 
   	 foreach ($filterArray as $k2 => $v2)
   	 {
   	 	
   	 	$class="budha";
   	 	if($k2 == 'Mercury')
   	 	{
   	 		$class="budha";
   	 	}
   	 	if($k2 == 'Ketu')
   	 	{
   	 		$class="kethu";
   	 	}
   	 	if($k2 == 'Venus')
   	 	{
   	 		$class="shukra";
   	 	}
   	 	if($k2 == 'Sun')
   	 	{
   	 		$class="surya";
   	 	}
   	 	if($k2 == 'Moon')
   	 	{
   	 		$class="chandra";
   	 	}
   	 	if($k2 == 'Mars')
   	 	{
   	 		$class="mangala";
   	 	}
   	 	if($k2 == 'Rahu')
   	 	{
   	 		$class="rahu";
   	 	}
   	 	if($k2 == 'Jupiter')
   	 	{
   	 		$class="guru";
   	 	}
   	 	if($k2 == 'Saturn')
   	 	{
   	 		$class="shani";
   	 	}
   	 	$overall = $p2+1;
   	 	$html .= '<ul class="child'.$childno.'" id="'.$parentid.'child'.$childno.'parent'.$overall.'">  ';
   	 	if($p2 == 0)
   	 	{
   	 		$finalAry[$p2]['from_date'] = $fromDate;
   	 	}
   	 	else{
   	 		$pt2 = $p2-1;
   	 		$finalAry[$p2]['from_date'] = $finalAry[$pt2]['end_date'];
   	 	}
   	 	$nofDays2 = round((($v1/(365*120))*($v2*365)));
   	 	//echo $nofDays2;exit();
   	 	$newYear = $nofDays2/365;
   	 	//echo $newYear;exit();
   	 	//$newYear = 1;
   	 	
   	 	$date = date_create($finalAry[$p2]['from_date']);
   	 	
	   	 if (strpos($newYear, '.') !== false) {
	   	 	$yearpos = strpos($newYear, '.');
	   	 	$year = substr($newYear,0,$yearpos);
	   	 	$addedDays = $year*365;
	   	 	$remainingDays = $nofDays2-$addedDays;
	   	 	/* if($p2 == 8)
	   	 	{
	   	 		$remainingDays = $remainingDays-1;
	   	 	} */
	   	 	date_add($date, date_interval_create_from_date_string($year.' years'));
	   	 	date_add($date, date_interval_create_from_date_string($remainingDays.' days'));
	   	 	
	     }
	     else{
	     	date_add($date, date_interval_create_from_date_string($newYear.' years'));
	     }
   	 	
   	 	 
	     /* date_add($date, date_interval_create_from_date_string($nofDays2.' days')); */
   	 	$endDateconv2 =  date_format($date, 'Y-m-d H:i:s');
   	 	$prevDate2 = $endDateconv2;
   	 	$finalAry[$p2]['end_date'] = $endDateconv2;
   	 	
   	 	$newchild = $childno+1;
   	 	
   	 	//$html .= '<li class="'.$class.'"><span>'.$k2.'</span></li>        <li>'.$finalAry[$p2]['from_date'].'</li>        <li>'.$finalAry[$p2]['end_date'].'</li>        <li><i class="fa fa-angle-right arrow parentclick" aria-hidden="true" parentprop="'.$newchild.'" parentdays="'.$nofDays2.'" fromdate="'.$finalAry[$p2]['from_date'].'" id="'.$parentid.'clickchild'.$childno.'parent'.$overall.'"></i></li>';
   	 	if($newchild == 6)
   	 	{
   	 		$html .= '<li class="'.$class.' extracls"><span><i class="fa " aria-hidden="true" ></i>'.$k2.'</span></li>        <li>'.date('Y-m-d',strtotime($finalAry[$p2]['from_date'])).'</li>        <li>'.date('Y-m-d',strtotime($finalAry[$p2]['end_date'])).'</li>';
   	 	}
   	 	else{
   	 	 $html .= '<li class="'.$class.'"><span><i class="fa fa-angle-right arrow parentclick" aria-hidden="true" parentprop="'.$newchild.'" parentdays="'.$nofDays2.'" fromdate="'.$finalAry[$p2]['from_date'].'" id="'.$parentid.'clickchild'.$childno.'parent'.$overall.'" planetname="'.$k2.'"></i>'.$k2.'</span></li>        <li>'.date('Y-m-d',strtotime($finalAry[$p2]['from_date'])).'</li>        <li>'.date('Y-m-d',strtotime($finalAry[$p2]['end_date'])).'</li> ';
   	 	}
   	 	$p2++;
   	 	//echo $nofDays2;exit();
   	 	$html .='</ul>';
   	     
   	 }
   	
   	 
   	 
   	 
   	 echo $html;exit();
   
   }
   
   
   public function actionChangemoonsign()
   {
   	$deviceUsers = AstroDeviceInfo::find()->select('*')->innerJoin('user','astro_device_info.uid=user.id')->where("user.status=10")->all();
   	foreach ($deviceUsers as $deviceInfo)
   	{
   	if($deviceUsers['deviceType'] == 'Android'){
    								$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    							}
    						if($deviceUsers->deviceType == 'IOS'){
    							$server_key = 'AIzaSyA7p6dCGdHwBJ6W6CJn1dP0REF4lhdIIUE';
    							}
   		$client = new Client();
   		$client->setApiKey($server_key);
   		$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
   		$setNotifications = new Notification('Moon Sign', 'Today your moon sign changing');
   		$setNotifications->setSound(true);
   	
   		$message = new Message();
   		$message->setPriority('high');
   		$message->addRecipient(new Device($deviceInfo['deviceToken']));
   		$message
   		->setNotification($setNotifications)
   	
   		;
   	
   		$response = $client->send($message);
   	}
   	//print_r($deviceUsers);exit();
   	
   }
   

}
