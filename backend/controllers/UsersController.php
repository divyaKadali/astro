<?php

namespace backend\controllers;

use Yii;
use backend\models\Users;
use backend\models\Userssearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use backend\models\UserDetails;
use backend\models\Planets;
use yii\filters\AccessControl;
use backend\models\AstroDeviceInfo;

use sngrl\PhpFirebaseCloudMessaging\Client;
use sngrl\PhpFirebaseCloudMessaging\Message;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Device;
use sngrl\PhpFirebaseCloudMessaging\Notification;

use backend\models\ChangePasswordForm;
/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
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
        						'index','create','update','view','delete','pushnotification'
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
                    'delete' => ['POST'],+-
                		
                ],
            ],
        ];
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Userssearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
    	$userdetailview=UserDetails::find()->where(['userid'=>$id])->one();
    //	$model->first_name = $userdetailview->first_name;
    	
        return $this->render('view', [
            'model' => $this->findModel($id),
        	'userdetailview'=>$userdetailview,
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
    	
        $model = new Users();
        $model->scenario = 'create';
        $planetDetails = Planets::find()->all();
        $planetlist = array();
        foreach ($planetDetails as $planet)
        {
        	$planetlist[$planet->planetId] = $planet->planetName;
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	
        	$user = new User();
        	$user->username = $model->username;
        	$user->email = $model->email;
        	$user->roleId = 2;
        	$user->setPassword($model->password);
        	$user->generateAuthKey();        	
        	$user->save();
        	$userDetails = new UserDetails();
        	$userDetails->userId = $user->id;
        	$userDetails->first_name = $model->first_name;
        	$userDetails->last_name = $model->last_name;
        	
        	if(!empty($model->dateofbirth )){
        		
        		$userDetails->dateofbirth = date('Y-m-d',strtotime($model->dateofbirth));
        	}else{
        		
        		$userDetails->dateofbirth = '0000-00-00';
        	}
        	        	        	
        	$userDetails->timeofbirth = $model->timeofbirth;        	
        	$userDetails->placeofbirth = $model->placeofbirth;
        	$userDetails->current_city = $model->current_city;        	
        	$userDetails->current_state = $model->current_state;
        	$userDetails->current_country = $model->current_country;
        	$userDetails->mobile = $model->mobile;
        	$userDetails->address=$model->address;
        	$userDetails->remedies=$model->remedies;
        	$userDetails->dasa_at_birth = $model->dasa_at_birth;
        	$userDetails->dasa_end_date = date('Y-m-d H:i',strtotime($model->dasa_end_date));
        	
        	//print_r($model->dasa_end_date);exit;
        	
        	if(!empty($model->dasa_end_date )){
        	
        		$userDetails->dasa_end_date = date('Y-m-d H:i',strtotime($model->dasa_end_date));
        	}else{
        	
        		$userDetails->dasa_end_date = '0000-00-00';
        	}
        	
        	
        	if($userDetails->save()){        		
        		if($userDetails->remedies != '')
        		{
        			$deviceUsers = AstroDeviceInfo::find()->select('*')->innerJoin('user','astro_device_info.uid=user.id')->where("user.status=10 AND user.id =".$user->id)->one();
        
        			if (!empty($deviceUsers))
        			{
        					if($deviceUsers->deviceType == 'Android'){
    								$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    							}
    						if($deviceUsers->deviceType == 'IOS'){
    							$server_key = 'AIzaSyDCcwjzeZ4accdbJOckc3cJwYpb5lU6L5Y';
    							}
    					$client = new Client();
        				$client->setApiKey($server_key);
        				$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
        				$setNotifications = new Notification('Remedial measures from Sri Astrology', 'Click here to see remedial measures for your horoscope.');
        				$setNotifications->setSound(true);
        				$notificationextraInfo = array();
        				$notificationextraInfo['screen'] = 'remedies';
        			
        				$message = new Message();
        				$message->setPriority('high');
        				$message->addRecipient(new Device($deviceUsers->deviceToken));
        				$message
        				->setNotification($setNotifications)
        				->setData($notificationextraInfo)
        				;
        			
        				$response = $client->send($message);
        			}
        		}
        	}
        	return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        	'planetlist' => $planetlist
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
    	
        $model = $this->findModel($id);
       // $model->scenario = 'update';
           //planets list for dropdown//
        $planetDetails = Planets::find()->all();
        $planetlist = array();
        foreach ($planetDetails as $planet)
        {
        	$planetlist[$planet->planetId] = $planet->planetName;
        }
           //UserDetails  fetching for view//    
        $UserDetails= UserDetails::find()->where(['userid'=>$id])->one();
        $remedies = $UserDetails->remedies;        
        if(!empty($UserDetails)){
        $model->first_name=$UserDetails->first_name;
        $model->last_name=$UserDetails->last_name;
        if($UserDetails->dateofbirth == 0000-00-00 ){
        	    $model->dateofbirth = ' 0000-00-00 ';
        }else{
        	    $model->dateofbirth = date('d-M-Y',strtotime($UserDetails->dateofbirth));
        	}
     
        $model->timeofbirth=$UserDetails->timeofbirth;
        $model->placeofbirth=$UserDetails->placeofbirth;
        $model->current_city=$UserDetails->current_city;
        $model->current_state=$UserDetails->current_state;
        $model->current_country=$UserDetails->current_country;
        $model->mobile=$UserDetails->mobile;
        $model->dasa_at_birth=$UserDetails->dasa_at_birth;
        $model->dasa_end_date=$UserDetails->dasa_end_date;
        $model->address = $UserDetails->address;
        $model->remedies=$UserDetails->remedies;
       
        }
        if ($model->load(Yii::$app->request->post()) && $model ->validate()) {
            $model->save();
        	$UserDetails->first_name=$model->first_name;
        	$UserDetails->last_name=$model->last_name;
        	$UserDetails->dateofbirth=  date('Y-m-d',strtotime($model->dateofbirth)); 
        	$UserDetails->timeofbirth=$model->timeofbirth;
        	$UserDetails->placeofbirth=$model->placeofbirth;
        	$UserDetails->current_city=$model->current_city;
        	$UserDetails->current_state=$model->current_state;
        	$UserDetails->current_country=$model->current_country;
        	$UserDetails->mobile=$model->mobile;
        	$UserDetails->remedies=$model->remedies;
        	$UserDetails->address=$model->address;
            $UserDetails->dasa_at_birth=$model->dasa_at_birth;
        	$UserDetails->dasa_end_date= date('Y-m-d H:i',strtotime($model->dasa_end_date));
        	if($UserDetails->save())
        	{
        		if($UserDetails->remedies != $remedies && $UserDetails->remedies != ''){
        			$deviceUsers = AstroDeviceInfo::find()->select('*')->innerJoin('user','astro_device_info.uid=user.id')->where("user.status=10 AND user.id =".$id)->one();
        			if (!empty($deviceUsers))
        			{
        					if($deviceUsers->deviceType == 'Android'){
    								$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    							}
    						if($deviceUsers->deviceType == 'IOS'){
    							$server_key = 'AIzaSyDCcwjzeZ4accdbJOckc3cJwYpb5lU6L5Y';
    							}
        				$client = new Client();
        				$client->setApiKey($server_key);
        				$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
        				$setNotifications = new Notification('Remedial measures from Sri Astrology', 'Click here to see remedial measures for your horoscope.');
        				$setNotifications->setSound(true);
        				$notificationextraInfo = array();
        				$notificationextraInfo['screen'] = 'remedies';
        				 
        				$message = new Message();
        				$message->setPriority('high');
        				$message->addRecipient(new Device($deviceUsers->deviceToken));
        				$message
        				->setNotification($setNotifications)
        				->setData($notificationextraInfo)
        				;
        				 
        				$response = $client->send($message);
        			}
        		}
        	}
        	
        	return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        	'planetlist' => $planetlist,
           
        		
        ]);
    }

 
    public function actionChangepassword($id)
    {
  
    	try {
    		$model = new ChangePasswordForm();
    	} catch (InvalidParamException $e) {
    		throw new BadRequestHttpException($e->getMessage());
    	}
    
    	if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->changePassword($id)) {
    		
    		$docinfo = User::find()->where(['id' => $id])->one();
    		$username = $docinfo->username;
    		$uemail = $docinfo->email;
    		$newpassword = $model->password;
    		//$body='Username:'.$username. + ''.'NewPassword:' .$newpassword;
    		//print_r($username);
    		//print_r($newpassword);exit();
    
    
    		$body='Hi &nbsp;&nbsp;';
    		$body.=$username;
    		$body.='<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				Your UserName is:'.$username;
    		$body.='<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your NewPassword is:' .$newpassword;
    
    		$body.='<br><br><br><u>Thanks&Regards,</u>';
    		$body.='<br>&nbsp;Astro Admin.';
    
    		\Yii::$app->mailer->compose()
    		->setFrom('astro-api@expertwebworx.in')
    		->setTo($uemail)
    		->setSubject('You Have Received a New Message on ' . \Yii::$app->name)
    		->setHtmlBody($body)
    		->send();
    
    		Yii::$app->getSession()->setFlash('success', 'New password was saved.');
    
    		return $this->redirect(['index']);;
    	}
    	return $this->render('resetPassword', [
    			'model' => $model,
    	]);
    }
    
    /**
     * Deletes an existing Users model.
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
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionPushnotification()
    {
    	$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    	$client = new Client();
    	$client->setApiKey($server_key);
    	$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
    	
    	$message = new Message();
    	$message->setPriority('high');
    	$message->addRecipient(new Device('cGkIBJTnSKQ:APA91bE6RdJ6Z2jum-moJ3PtkcNmCQz1FYNlA3JpsfPtk2BeM8rwWwPbskaJpTOs2h7CDn_pxCyO17TrtkaldCf3nD5TUi697iOzIWQ_plO5L2BqEXkiGVgGUHgS1TLi_hNt3gdwFduW46Eu3EViJaWOpAfICWm70A'));
    	$message
    	->setNotification(new Notification('push notification test', 'Astro push notification test'))
    	->setData(['key' => 'value'])
    	;
    	
    	$response = $client->send($message);
    	print_r($response);exit();
    	var_dump($response->getStatusCode());
    	var_dump($response->getBody()->getContents());
    }
    public function actionStatuschange($id)
    {
    	$model = User::find()->where(['id'=>$id])->one();
    
    	if($model->status == '10')
    	{
    		$status = 0;
    	}
    	if($model->status == '0')
    	{
    		$status = 10;
    	}
    	$model->status = $status;
    	$model->update();
    	Yii::$app->getSession()->setFlash('success', 'You are successfully change user status.');
    	return $this->redirect(['index']);
     }
    public function actionNotificationstatuschange($id)
    {
    	
    	$model = UserDetails::find()->where(['userId'=>$id])->one();
    	$user = User::find()->where(['id'=>$id])->one();
    	if($user->status == '10'){
    	if($model->notification_status == '0')
    	{
    		$model->notification_status = 1;
    		if($model->save())
    		{
    		$deviceUsers = AstroDeviceInfo::find()->select('*')->innerJoin('user','astro_device_info.uid=user.id')->where("user.status=10 AND user.id =".$id)->one();
    		if (!empty($deviceUsers))
    		{
    					if($deviceUsers->deviceType == 'Android'){
    								$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    							}
    						if($deviceUsers->deviceType == 'IOS'){
    							$server_key = 'AIzaSyDCcwjzeZ4accdbJOckc3cJwYpb5lU6L5Y';
    							}
    			$client = new Client();
    			$client->setApiKey($server_key);
    			$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
    			$setNotifications = new Notification('Account activated', 'Your account has been activated, please enjoy our
customized horoscope analysis service for 30 days for FREE
    					');
    			$setNotifications->setSound(true);
    		
    			$message = new Message();
    			$message->setPriority('high');
    			$message->addRecipient(new Device($deviceUsers->deviceToken));
    			$message
    			->setNotification($setNotifications)
    		
    			;
    		
    			$response = $client->send($message);
    		}
    		Yii::$app->getSession()->setFlash('success', 'Notification Will be Sent.');
    		}
    	}
    	else {
    		Yii::$app->getSession()->setFlash('warning', 'Notification Already Sent.');
    	}
    	}
    	else{
    		Yii::$app->getSession()->setFlash('error', 'User Status is in In-active.');
    	}
    
    	return $this->redirect(['index']);
    }
}
