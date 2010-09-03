<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Psy extends Controller_Template {

	public $template = 'psy_template';    
    
        
    public function action_nice()
    {
        $this->template->content = 'You are very NICE!';
        
    }
    
    public function action_intellectual()
    {
        $this->template->content = 'You are very INTELLECTUAL!';
        
    }
    
    
} // End Psy
