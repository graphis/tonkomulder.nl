<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Upload extends Controller_Layout {

	public $template = 'templates/template';

	public function action_index() {

        $this->template->content = View::factory('upload');
        if(isset($_POST['submit']) && $_FILES['file']['size'] > 0) {
            $up = new Model_Upload();
            $files = Validate::factory($_FILES);
            $files->rule('file', 'Upload::not_empty');
            $files->rule('file', 'Upload::type', array(array('jpg', 'png', 'gif','doc','xlt')));
            $files->rule('file', 'Upload::size', array('5M'));
            if($files->check()) {
  /*              
                $up->name       =   $_POST['name'];
                $up->type       =   $_FILES['file']['type'];
                $up->size       =   $files['file']['size'];
                $up->content    =   $file['file']['file'];
                $up->save();
*/
                $this->template->content = View::factory('upload')
                    ->set('data', $_FILES['file']);
            }
        }
    }
}
