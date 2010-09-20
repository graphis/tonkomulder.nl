<?php defined('SYSPATH') or die('No direct access');

class Controller_Page extends Controller_Layout {
    public $template = 'template/template';

    public function action_get($lang, $page) {
        $req = Request::instance();
        $p = ORM::factory('page');
        $name = $p->where('name', '=', $page)
            ->find();
        $this->template->content = View::factory('page')
            ->set('title', $name->title)
            ->set('content', $name->content);
    }
}
