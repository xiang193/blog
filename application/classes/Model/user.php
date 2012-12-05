<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model {
	private $user_table;
	private $uid = 0;
	private $_user = FALSE;
	
	public function __construct()
	{
		$this->user_table='user';
		$this->init();
	}
	
	public function getUid()
	{
		return $this->uid;
	}
	
	public function getUser()
	{
		return $this->_user;
	}
	
	//初始化
	public function init()
	{
		$uid = Cookie::get('uid');
		$this->uid = $uid ? $uid : 0;
		if ($this->uid)
			$this->_user = TRUE;
	}
	
	//登陆
	public function login($username = NULL, $password = NULL)
	{
		if ($this->_user)
			url::redirect('index');
		$result = DB::select()
					->from($this->user_table)
					->where('username','=',$username)
					->execute()
					->as_array();
		if ($username == '' || $username == NULL || empty($result))
			return FALSE;
		$result = $result[0];
		$uid = $result['uid'];
		if ($result['password'] == $password)
		{
			Cookie::set('uid', $uid);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	//退出
	public function logout()
	{
		if (!$this->_user)
			$this->_user = FALSE;
		$this->uid = 0;
		Cookie::delete('uid');
		return TRUE;
	}
	
	//获取信息
	public function getDetail()
	{
		$result = DB::select()
					->from($this->user_table)
					->where('uid', '=', $this->uid)
					->execute()
					->as_array();
		if (($result != NULL) && (!empty($result[0])))
			return $result[0];
		else
			return FALSE;
	}
	
	//修改信息
	public function setDetail($blog = NULL, $mail = NULL)
	{
		if (!$this->_user)
			return FALSE;
		if ($blog == NULL || $mail == NULL)
			return FALSE;
		return DB::update($this->user_table)
				->set(
					array(
						'blog_name' => $blog,
						'mail'		=> $mail,
						'time'		=> time()
					)
				)
				->where('uid', '=', $this->uid)
				->execute();
	}
	
	//修改密码
	public function changePwd($pwd1 = NULL, $pwd2 = NULL, $pwd3 = NULL)
	{
		if (!$this->_user)
			return FALSE;
		$result = DB::select('password')
					->from($this->user_table)
					->where('uid', '=', $this->uid)
					->execute()
					->as_array();
		if ($pwd1 == NULL || $pwd2 == NULL || $pwd2 != $pwd3 || empty($result))
			return FALSE;
		$pwd = $result[0]['password'];
		if ($pwd1 == $pwd && $pwd2 == $pwd3)
		{
			return DB::update($this->user_table)
						->set(
							array(
								'password'  => $pwd2,
								'time'		=> time()
							)
						)
						->where('uid', '=', $this->uid)
						->execute();
		}
		else
			return FALSE;
	}
} // End User
