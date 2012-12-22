<?php

class UserIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$model = Usuario::model()->findByAttributes(array(
			'nick' => $this->username,
		));
		
		if ($model === null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else
		{
			if (MD5($this->password) !== $model->password)
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{
				$this->_id = $model->id;
				$this->errorCode=self::ERROR_NONE;
			}
		}
		return !$this->errorCode;
	}
	
	public function getId()
    {
        return $this->_id;
    }
}