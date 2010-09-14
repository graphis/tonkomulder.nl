<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us" />
	<title><?=$title?></title>	
    <meta name="keywords" content="<?=$meta_keywords?>" />
    <meta name="description" content="<?=$meta_description?>" />
    <meta name="copyright" content="<?=$meta_copyright?>" />
    <?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
    <?php foreach($scripts as $file) { echo HTML::script($file), "\n"; }?>
</head>
<body>
<div class="container">
	<div class="navigation"><?=$navigation?></div>
	<div class="content"><?=$content?></div>
</div>
</body>
</html>
