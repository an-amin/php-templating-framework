<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http';
$base_url = "{$protocol}://{$_SERVER['HTTP_HOST']}";
$base_url .= $document_sub_root = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$base_url = trim($base_url,'/');
define('BASE_PATH', $base_url);
define('DOCUMENT_SUB_ROOT', $document_sub_root);
$request_uri = str_replace(DOCUMENT_SUB_ROOT, '', $_SERVER['REQUEST_URI']);
$request_uri = str_replace('?'.$_SERVER['QUERY_STRING'], '', $request_uri);
define('REQUEST_URI', $request_uri);
require_once './_bootstrap.php';
