<?php defined('SYSPATH') or die('No direct script access.'); ?>
<pre>
<?
//print_r($static['title']);

foreach( $dynamic as $key=>$value) {
    print HTML::anchor('page/get/' . $value->name, $value->title) . " ";
}
print '| ';
for($i =0; $i< count($static); $i++) {
    print HTML::anchor($static[$i]['name'], $static[$i]['title']) . " ";
}
?>
</pre>
