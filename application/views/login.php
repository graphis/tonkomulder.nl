<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1><?=$title;?></h1>
<?
if(isset($content) && $content != NULL) {
    print $content;
}
else {
    print Form::open(Route::get('login')->uri(array('language'=>i18n::$lang)));

    print Form::label('firstname', i18n::get('login_firstname') . ': ');
    print Form::input('firstname') . ' ';

    print Form::label('lastname', i18n::get('login_lastname') . ': ');
    print Form::input('lastname') . ' ';

    print Form::label('password', i18n::get('login_password') . ': ');
    print Form::password('password') . '<br />';

    print Form::submit('submit', i18n::get('login_form_submit'));

    print '<p>' . $content . '</p>';
}
    
?>
