<?php 
defined('BASE_PATH') OR die('Direct scripts is not allowed!');

function url($slags='')
{
	if(empty($slags))
		return BASE_PATH;
	$slags = trim($slags,'/');
	return BASE_PATH .'/'. $slags;
}

function include_script($uri)
{
	if(file_exists($uri)){
		echo "\n"."<!-- script included : {$uri} -->"."\n";
		require_once $uri;
	}else{
		echo "\n"."<!-- failed to include script : {$uri} -->"."\n";
	}
}

function include_layout_partial($uri)
{
	$uri =  'template/'. CONFIG['template'] .'/layouts/'. trim($uri, '/') . '.php';
	include_script($uri);
}

function css($uri)
{
	$link = $uri . (CONFIG['script_auto_refreshing'] ? '?cache_id='.uniqid() : '');
	$html = "\n".'<link href="'.url($link).'" rel="stylesheet" type="text/css">'."\n";
	if(!file_exists($uri))
		$html = "\n"."<!-- file not exists! \n\t {$html} \n\t : to have expected styles get the file... -->"."\n";
	return $html;
}

function js($uri)
{
	$link = $uri . (CONFIG['script_auto_refreshing'] ? '?cache_id='.uniqid() : '');
	$html = "\n".'<script src="'.url($link).'" type="text/javascript"></script>'."\n";
	if(!file_exists($uri))
		$html = "\n"."<!-- file not exists! \n\t {$html} \n\t : to have expected scripts get the file. -->"."\n";
	return $html;
}

function page_specific_css()
{
	$head_uri =  'template/'. CONFIG['template'] .'/pages/'. str_replace('/', '_', REQUEST_URI) . '.head.php';
	$css_uri =  'template/'. CONFIG['template'] .'/'. trim(CONFIG['custom_css_dir'],'/') . '/' . str_replace('/', '_', REQUEST_URI) . (CONFIG['minified_scripts'] ? '.min' : '') . '.css';
	include_script($head_uri);
	echo css($css_uri);
}

function page_specific_js()
{
	$tail_uri =  'template/'. CONFIG['template'] .'/pages/'. str_replace('/', '_', REQUEST_URI) . '.tail.php';
	$js_uri = 'template/'. CONFIG['template'] .'/'. trim(CONFIG['custom_js_dir'],'/') . '/' . str_replace('/', '_', REQUEST_URI) . (CONFIG['minified_scripts'] ? '.min' : '') . '.js';
	include_script($tail_uri);
	echo js($js_uri);
}

function load_view()
{
	$view_file = !empty(REQUEST_URI) ? REQUEST_URI : 'index';
	$view_file = './template/'.CONFIG['template'].'/pages/'.$view_file.'.php';
	if(!file_exists($view_file))
	{
		echo "<!-- failed to load view : {$view_file} -->\n";
		$view_file = './template/'.CONFIG['template'].'/pages/404.php';
	}
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