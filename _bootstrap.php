<?php 
defined('BASE_PATH') OR die('Direct scripts is not allowed!');
require_once '_config.php';
require_once '_functions.php';

switch(REQUEST_URI) 
{
	// some route
	case 'some-page-name':
		$layout_name = 'master-layout';
		break;
	
	default:
		$layout_name = 'master';
		break;
}

$layout_file_path = './template/'.CONFIG['template'].'/layouts/'.$layout_name.'.php';
include_script($layout_file_path);
