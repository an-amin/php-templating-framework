<?php 
defined('BASE_PATH') OR die('Direct scripts is not allowed!');

function url($slags='')
{
	if(empty($slags))
		return BASE_PATH;
	$slags = trim($slags,'/');
	return BASE_PATH .'/'. $slags;
}

function css($uri)
{
	$html = '<link href="'.url($uri).'" rel="stylesheet" type="text/css">';
	if(!file_exists($uri))
		$html = "<!-- file not exists! \n\t {$html} \n\t : to have expected styles get the file... -->";
	return $html;
}

function js($uri)
{
	$html = '<script src="'.url($uri).'" type="text/javascript"></script>';
	if(!file_exists($uri))
		$html = "<!-- file not exists! \n\t {$html} \n\t : to have expected scripts get the file. -->";
	return $html;
}

function page_specific_css()
{
	$uri =  'template/'. CONFIG['template'] . trim(CONFIG['custom_css_dir'],'/') . '/' . (empty(REQUEST_URI) ? 'index' : str_replace('/', '_', REQUEST_URI) . (CONFIG['minified_scripts'] ? '.min' : '')) . '.css';
	return css($uri);
}

function page_specific_js()
{
	$uri = 'template/'. CONFIG['template'] . trim(CONFIG['custom_js_dir'],'/') . '/' . ( empty(REQUEST_URI) ? 'index' : str_replace('/', '_', REQUEST_URI) . (CONFIG['minified_scripts'] ? '.min' : '')) . '.js';
	return js(REQUEST_URI);
}

function include_script($uri)
{
	if(file_exists($uri)){
		echo "<!-- included : {$uri} -->";
		require_once $uri;
	}else{
		echo "<!-- failed to include : {$uri} -->";
	}
}

function load_view()
{
	$view_file = !empty(REQUEST_URI) ? REQUEST_URI : 'index';
	$view_file = './template/'.CONFIG['template'].'/pages/'.$view_file.'.php';
	if(!file_exists($view_file))
		$view_file = './template/'.CONFIG['template'].'/pages/404.php';
	// require_once $view_file;
	include_script($view_file);
}

// DEBUG FUNCTIONs
function p($param=null){
	echo '<pre>';print_r($param);echo '</pre>';
}
function d($param=null){
	echo '<pre>';var_dump($param);echo '</pre>';
}
function pd($param=null){
	p($param);die('<br>--died--<br>');
}
function dd($param=null){
	d($param);die('<br>--died--<br>');
}