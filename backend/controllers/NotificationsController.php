<?php

namespace backend\controllers;

use Yii;
use backend\models\Notifications;
use backend\models\NotificationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\NotificationsHistory;
use yii\filters\AccessControl;
use backend\models\AstroDeviceInfo;

use sngrl\PhpFirebaseCloudMessaging\Client;
use sngrl\PhpFirebaseCloudMessaging\Message;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Device;
use sngrl\PhpFirebaseCloudMessaging\Notification;
/**
 * NotificationsController implements the CRUD actions for Notifications model.
 */
class NotificationsController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Notifications models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NotificationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Notifications model.
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
     * Creates a new Notifications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Notifications();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->created_by=Yii::$app->user->id;
        	$model->created_date=date('Y-m-d H:i:s');
        	$model->save();
            return $this->redirect(['view', 'id' => $model->not_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Notifications model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->updated_by=Yii::$app->user->id;
        	$model->updated_date=date('Y-m-d H:i:s');
        	$model->save();
            return $this->redirect(['view', 'id' => $model->not_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Notifications model.
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
     * Finds the Notifications model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notifications the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Notifications::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionNotificationhistory()
    {
    	date_default_timezone_set("Asia/Kolkata");
    	$presenttime = date("Y-m-d G:i:s");
    	$notificationdata = Notifications::find()->where("schedule_time <= '$presenttime'")->asArray()->all();
    	$deviceUsers = AstroDeviceInfo::find()->select('*')->innerJoin('user','astro_device_info.uid=user.id')->where("user.status=10")->all();
    	
    	//print_r($deviceUsers);exit();
    	foreach($notificationdata as $data)
    	{
    		foreach ($deviceUsers as $deviceInfo)
    		{
    					if($deviceInfo['deviceType'] == 'Android'){
    						$server_key = 'AIzaSyBfU4pD7SQyfc7BUgp_RyBDbgWVFCZPiy0';
    					}
    					if($deviceInfo['deviceType']  == 'IOS'){
    							$server_key = 'AIzaSyDCcwjzeZ4accdbJOckc3cJwYpb5lU6L5Y';
    					}
    			$client = new Client();
    			$client->setApiKey($server_key);
    			$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
    			$setNotifications = new Notification($data['notification_title'], $data['notification_description']);
    			$setNotifications->setSound(true);
    			$notificationextraInfo = array();
    			$notificationextraInfo['screen'] = 'notification';
    			$message = new Message();
    			$message->setPriority('high');
    			$message->addRecipient(new Device($deviceInfo['deviceToken']));
    			$message
    			->setNotification($setNotifications)
    			->setData($notificationextraInfo)
    			;
    			 
    			$response = $client->send($message);
    		}
    		$history  = new NotificationsHistory();
    		$history->not_id = $data['not_id'];
    		$history->notification_type = $data['notification_type'];
    		$history->notification_title = $data['notification_title'];
    		$history->notification_description = $data['notification_description'];
    		$history->schedule_time = $data['schedule_time'];
    		$history->created_date = date("Y-m-d h:i:s");
    		$history->updated_date =date("Y-m-d h:i:s");
    		$history->created_by = Yii::$app->user->identity->id;
    		$history->updated_by = Yii::$app->user->identity->id;
    		$history->save();
    	}
    	Notifications::deleteAll("schedule_time <= '$presenttime'");
    	
    }
}
