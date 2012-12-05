<?php defined('SYSPATH') OR die('No direct script access.');

class URL extends Kohana_URL {
	/**
	* 转向
	*
	* 增加用户语言后转到所给的 控制器/方法
	*
	*/
	public static function redirect($to = '')
	{
			// $site_url        = URL::site(TRUE);
			// print_r(URL::params());
			// die($site_url);
			// $lng = Request->param('lang');
			//$to = URL::site();
			//die();
			header("Location: {$to}");
			die();
	}
}