<?php
namespace backend\models;

use yii\base\Model;
use yii\base\InvalidParamException;
use common\models\User;

use yii;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;
    public $confirmpassword;

    /**
     * @var \common\models\User
     */
    private $_user;


    

    /**
     * @inheritdoc
     */
    public function __construct($token, $config = [])
    {
    	if (empty($token) || !is_string($token)) {
    		throw new InvalidParamException('Password reset token cannot be blank.');
    	}
    	$this->_user = User::findByPasswordResetToken($token);
    	if (!$this->_user) {
    		// throw new InvalidParamException('Wrong password reset token.');
    		return Yii::$app->getResponse()->redirect('site/login/');
    		 
    	}
    	parent::__construct($config);
    }
   
    public function rules()
    {
    	return [
    			['password', 'required'],
    			//['password', 'string', 'min' => 6],
    			[['confirmpassword'], 'compare', 'compareAttribute' => 'password'],
    			[['password'],'safe'],
    
    			[
    					'confirmpassword',
    					'required',
    			],
    	];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function attributeLabels()
    {
    	return [
    			'confirmpassword' => 'Confirm Password',
    			'password' => 'Password',
    			 
    	];
    }


    public function resetPassword()
    {
    	$user = $this->_user;
    	//$user = User::find()->where(['id' => $token])->one();
    	$user->setPassword($this->password);
    	$user->removePasswordResetToken();
    
    	return $user->save(false);
    }
   
}
