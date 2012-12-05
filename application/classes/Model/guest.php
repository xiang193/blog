<?php defined('SYSPATH') or die('No direct script access.');

class Model_Guest extends Model {
	private $guest_table;
	private $_guest = array();
	
	public function __construct()
	{
		//parent::__construct();
		$this->guest_table='guest';
	}
	
	//添加
	public function wordAdd($mail = NULL, $content = NULL)
	{
		if ($mail == NULL || $content == NULL)
			return FALSE;
		return DB::insert('guest',array('g_mail', 'content', 'time'))
					->values(array($mail, $content, time()))
					->execute();
	}
	
	//删除
	public function wordDel($gid = NULL)
	{
		if ($gid == NULL)
			return FALSE;
		return DB::delete($this->guest_table)
					->where('gid', '=', $gid)
					->execute();
	}
	
	//获取
	public function wordList($page = 0)
	{
		$list = DB::select('gid', 'g_mail', 'content')
					->from($this->guest_table)
					->order_by('time','DESC')
					->limit(10)
					->offset(0)
					->execute()
					->as_array();
		return $list;
	}
} // End User
