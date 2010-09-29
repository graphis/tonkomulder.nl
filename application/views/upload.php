<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Upload</h1>
<?= Form::open(NULL, array('enctype' => 'multipart/form-data')); ?>
<?= Form::label('name') . Form::input('name'); ?>
<?= Form::label('file') . Form::file('file'); ?>
<?= Form::submit('submit', 'Submit'); ?>
<?= Form::close(); ?>
<pre>
<?php
if(isset($data)) {
    print_r($data);
}
?>
</pre>
