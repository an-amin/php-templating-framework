<?php 
defined('BASE_PATH') OR die('Direct scripts is not allowed!');

$config['app-title'] 		= 'PHP Templating Framework';
$config['app-description'] 	= 'BARCODETECH-AUTOMATION';
$config['app-favicon'] 		= 'favicon.ico';
$config['logo']				= 'assets/images/logo-light.png';
$config['logo-sm']			= 'assets/images/logo-sm.png';

$config['template']			= 'default';
$config['custom_css_dir']	= 'assets/css/';
$config['custom_js_dir'] 	= 'assets/js/';
$config['minified_scripts']	= false;




// --------------------------------------------------------------
define('CONFIG', $config);