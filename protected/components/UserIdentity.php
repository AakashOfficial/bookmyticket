<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	public $user_name;
	public $user_pass;
	private $_id;
	const ERROR_INACTIVE_USER = 3;	//Custom variable for Status Id of User
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
	*/
	
	
	/* Custom written authenticate()*/
	public function __construct($user_name,$user_pass)
	{
		$this->user_name=$user_name;
		$this->user_pass=$user_pass;
	}

    public function authenticate()
    {
		$user = null;
		$status_id = null;
		
		$user_name = $this->user_name;
		
		$user = User::model()->find('username=?',array($user_name));
		
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($user->validatePassword($user->salt, $this->user_pass))
		{
			//As Password is Correct, so now check the Check for User->Status Id
			if($user->status_id == 1)	//Active User
			{
				$this->_id=$user->id;
				$this->setState('disp_name',$user->disp_name);
				$this->setState('username',$user->username);
				
				$this->errorCode = self::ERROR_NONE;
			}
			else
				$this->errorCode=self::ERROR_INACTIVE_USER;
		}
		else
        		$this->errorCode=self::ERROR_PASSWORD_INVALID;
		
		return $this->errorCode;
    }
	
    public function getId()
    {
        return $this->_id;
    }
}