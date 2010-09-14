<?php defined('SYSPATH') or die('No direct access'); ?>

class Model_Navigation {

    public function menu() {
        return array(
            'home' => i18n::$lang.'/welcome'
        );
    }
}
