<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Layout {

	public $template = 'template/template';

	public function action_index() {
		$this->template->content = View::factory('welcome')
			->set('title', 'Welkom')
			->set('content', 'Welkom op www.tonkomulder.nl')
		;
	}
}
