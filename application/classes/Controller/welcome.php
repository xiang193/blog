<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	
	public function action_index()
	{
		//print_r(DB::select()->from('user'));
		$this->response->body('hello, world!');
	}

} // End Welcome
