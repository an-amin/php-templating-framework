<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http';
$base_url = "{$protocol}://{$_SERVER['HTTP_HOST']}";
$base_url .= $document_sub_root = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$base_url = trim($base_url,'/');
define('BASE_PATH', $base_url);
define('DOCUMENT_SUB_ROOT', $document_sub_root);
define('REQUEST_URI', str_replace(DOCUMENT_SUB_ROOT, '', $_SERVER['REQUEST_URI']));

require_once './_bootstrap.php';
