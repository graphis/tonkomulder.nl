<?php defined('SYSPATH') or die('No direct script access'); ?>
<?php echo form::open(NULL, array('id' => 'login')) ?>
  
  <h1><?php echo __('Login') ?></h1>
  
  <?php include Kohana::find_file('views', 'errors') ?>
  
  <ul>
      <li><label><span><?= i18n::get('login_name'); ?></span> <?php echo form::input('username', $user->username) ?></label></li>
      <li><label><span><?= i18n::get('login_password'); ?></span> <?php echo form::password('password') ?></label></li>
  </ul>
  
  <?php echo form::button(NULL, 'Login', array('type' => 'submit')) ?>
  
  <?php echo form::close() ?>
