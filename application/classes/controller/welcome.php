<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Layout {

	public $template = 'template/template';

	public function action_index() {
        $page = ORM::factory('page')
            ->where('name', '=', 'welcome')
            ->find();

        $title = 'title_' . i18n::$lang;
        $content = 'content_' . i18n::$lang;
        $this->template->content = View::factory('welcome')
            ->set('title', $page->$title)
            ->set('content', $page->$content);
    }
}
