<?php
require_once('includes/templateFunctions.php');

$tmpl = new templateFunctions();
$tmpl ->show();
	if (isset($_REQUEST['task']))
	{
	$task=$_REQUEST['task'];
	switch($task)
	{
	case 'addcontent':$this->addcontent();break;
	case 'anyothertask':$this->anyothertask();break;
	default:$this->display();break;
	}
	}
	else
	{
	//jika tidak query string akan dipanggil fungsi view content()
	$this->template.php();
	}
