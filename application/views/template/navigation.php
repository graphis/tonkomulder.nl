<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?
foreach( $content as $key=>$value) {
    print HTML::anchor('page/get/' . $value->name, $value->title) . " ";
}
print HTML::anchor('contact', 'Contact') . " ";
print HTML::anchor('login', 'Login') . " ";
?>
