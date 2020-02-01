<?php 
defined('BASE_PATH') OR die('Direct scripts is not allowed!');

$config['app-title'] 				= 'PHP Templating Framework';
$config['app-description'] 			= 'BARCODETECH-AUTOMATION';
$config['app-favicon'] 				= 'favicon.ico';
$config['logo']						= 'assets/images/logo-light.png';
$config['logo-sm']					= 'assets/images/logo-sm.png';

$config['template']					= 'default';
$config['custom_css_dir']			= 'assets/css/';
$config['custom_js_dir'] 			= 'assets/js/';
$config['custom_img_dir'] 			= 'assets/img/';
$config['custom_audio_dir'] 		= 'assets/audio/';
$config['custom_video_dir'] 		= 'assets/video/';
$config['custom_file_dir'] 			= 'assets/file/';
$config['minified_scripts']			= false;

$config['script_auto_refreshing'] 	= true;


// --------------------------------------------------------------
define('CONFIG', $config);