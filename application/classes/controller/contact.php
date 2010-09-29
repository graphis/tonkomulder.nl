<?php defined('SYSPATH') or die('No direct script access');

class Controller_Contact extends Controller_Layout {
    public $template = 'templates/template';

    public function action_index() {
        $this->template->content = View::factory('contact')
            ->set('title', 'Contact')
            ->set('content', 'Hier komen mijn contact gegevens');
    }
}
