<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Layout {

	public $template = 'templates/template';

	public function action_index() {
        $page = ORM::factory('page')
            ->where('name', '=', 'welcome')
            ->find();

        $this->template->content = View::factory('welcome')
            ->set('title', $page->title)
            ->set('content', $page->content);
    }
}
