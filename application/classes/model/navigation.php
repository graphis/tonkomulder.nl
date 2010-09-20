<?php defined('SYSPATH') or die('No direct access'); 

class Model_Navigation {

    public function menu() {
        $menu = ORM::factory('page')
            ->find_all();
        
        
        return $menu;
    }
}
