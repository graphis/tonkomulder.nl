<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?
foreach( $content as $key=>$value) {
    print HTML::anchor($value, $key) . " ";
}
?>
