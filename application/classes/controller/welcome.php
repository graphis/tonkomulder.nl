<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller 
{

	public function action_index()
	{
		$view = View::factory('welcome')
			->set('content', 'hello, world!')
			->set('title', 'www.tonkomulder.nl');
		$this->request->response = $view;
	}
}
