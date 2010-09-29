<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller_Template {

	public $template = 'templates/template';
    public $user;
    public $auth_required = FALSE;

	public function before() {
		parent::before();
		i18n::$lang = Request::instance()->param('language');

		if($this->auto_render) {
			$this->template->meta_keywords = '';
			$this->template->meta_description = '';
			$this->template->meta_copyright = '';
			$this->template->styles = array('assets/css/main.css' => 'screen');
			$this->template->scripts = array();
            $this->template->navigation = View::factory('templates/navigation')
                ->set('dynamic', $this->getDynamicMenu())
                ->set('static', $this->getStaticMenu());
			$this->template->title = i18n::get('layout_title');
		}
    }

    public function getDynamicMenu() {
        $nav = new Model_Navigation();
        return $nav->dmenu();
    }
    public function getStaticMenu() {
        $nav = new Model_Navigation();
        return $nav->smenu();
    }

	public function after() {
		parent::after();
	}
}
