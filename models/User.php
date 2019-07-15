<?php

class User extends Model {
	
	public function __construct()
    {
        $this->tableName = 'users';
    }
	
	public function login()
	{
		$user = $this->getUserByLogin();
		if (!$user) throw new Exception('error login');
		return $this->checkPassword($user);
	}
	
	public function getUserByLogin()
	{
		$params = ['login' => $_POST['login'], 'status' => STATUS_ACTIVE];
		$sql = 'SELECT *  FROM `users` WHERE `login` = :login AND `status` = :status';
        $user = self::perform($sql, $params)->fetch();
		if ($user) return $user;
	}
	
	private function checkPassword($user)
	{
		$password_form = trim($_POST['password']);
		if ($user->password != $password_form) throw new Exception('error password');
		return $user;
	}


    
	
}























