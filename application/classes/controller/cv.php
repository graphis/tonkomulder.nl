<?php defined('SYSPATH') or die('No direct access');

class Controller_Cv extends Controller_Layout {
    public $template = 'templates/template';

    public function action_index() {
        $this->template->content = View::factory('cv')
            ->set('title', 'Curriculum Vitae')
            ->set('content', 'hier komt mijn cv');
    }
}
