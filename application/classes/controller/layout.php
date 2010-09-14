<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller_Template {

	public $template = 'template/template';

	public function before() {
		parent::before();
		i18n::$lang = Request::instance()->param('language');

		if($this->auto_render) {
			$this->template->meta_keywords = '';
			$this->template->meta_description = '';
			$this->template->meta_copyright = '';
			$this->template->styles = array('assets/css/main.css' => 'screen');
			$this->template->scripts = array();
            $this->template->navigation = View::factory('template/navigation')
                ->set('content', $this->navigation());
			$this->template->title = i18n::get('layout_title');
		}
    }

    public function navigation() {
        return array(
            'home'=>i18n::$lang.'/welcome',
            'cv' => i18n::$lang.'/cv',
            'contact' => i18n::$lang.'/contact'
        );
            //Kohana::load(print Kohana::find_file('models', 'menu_struct'));
    }

	public function after() {
		parent::after();
	}
}
