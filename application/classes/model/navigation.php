<?php defined('SYSPATH') or die('No direct access'); 

class Model_Navigation {

    public function dmenu() {
        $page = ORM::factory('page')
            ->find_all();
        return $page;
    }

    public function smenu() {

        $static = array(
            array(
                'name' => 'contact',
                'title' => 'Contact',
                'content' => 'contact content',
                'lang' => 'nl',
                'order' => 5,
                'role' => 0
            )
        );
        return $static;
    }
}
