<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'custom_template';    
    
    public function action_index()
	{
		
        $this->template->title = 'Main page';
        $this->template->content = View::factory('elements/content')
                                        ->bind('p1',$par1)
                                        ->bind('p2',$par2);
                                        
        $par1 = 'news 1';
        $par2 = 'news 2';
        $this->template->navigation = $this->_simple_nav();
        
        
	}
    
    public function action_page1()
    {
       
        $out = Request::factory('psy/nice')->execute();
        
        $this->template->title = 'Page 1';
        $this->template->content = 'hello, world<br />page 1!<br />'.$out;
        $this->template->navigation = $this->_simple_nav();
        
        
    }
    
    public function action_page2()
    {
        $out = Request::factory('psy/intellectual')->execute();
        
        $this->template->title = 'Page 2';
        $this->template->content = 'hello, world<br />page 2!<br />'.$out;
        $this->template->navigation = $this->_simple_nav();
        
        
    }
    
    public function action_form()
    {
        $last_input = array();
        $errors = array();
        
        if (Arr::get($_POST, 'hidden') == 'form_sent')
        {
            $keys = array ('text','pass','area','chck','radio','sel');
            $last_input = Arr::extract($_POST, $keys, NULL);
            
            $valid = Validate::factory($last_input)
                        ->filter('text','trim')
                        ->filter('pass','trim')
                        ->filter('area','trim')
                        
                        ->rules('text',array('not_empty'=>NULL,'alpha_numeric'=>array(TRUE),'max_length'=>array(10)))
                        ->rules('pass',array('alpha_numeric'=>array(TRUE),'max_length'=>array(10)))
                        ->rule('radio','not_empty');
            
            if ( ! $valid->check())
            {
                $errors = $valid->errors();    
            }
            
        }
        
        $this->template->title = 'Form page';
        $this->template->content = View::factory('elements/form')
                                        ->set('last_input', $last_input)
                                        ->set('errors', $errors);
        $this->template->navigation = $this->_simple_nav();
        
        
    }
    
    protected function _simple_nav()
    {
        $class = new ReflectionClass('Controller_Welcome');
        
        $methods = $class->getMethods();
        
        $slugs = array();
        
        foreach ($methods as $method_object)
        {
            $pos = strpos($method_object->name, 'action_');
            
            
            if ($pos !== 0)
            {
                
                continue;
            }
            
            $slug = substr_replace($method_object->name, '', 0, 7);
                
            if ($slug === '')
            {
                continue;
            }
                
            $m = new ReflectionMethod('Controller_Welcome',$method_object->name);
               
            if ($m->isPublic())
            {
                $slugs[] = HTML::anchor($slug, url::title($slug));
            }
            
                        
        }
        
        //$view = new View('elements/navigation');
        //$view->items = $slugs;
        
        $view = View::factory('elements/navigation')
            ->set('items',$slugs);
        
        return $view;
    }

    
    
} // End Welcome
