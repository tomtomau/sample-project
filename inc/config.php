<?php
define("LIVESERVERNAME", "sample.project.com");
if($_SERVER['SERVER_NAME'] == 'localhost'){
	define("DEV", true);
	// find folder this is located in
	$redirect_url = explode("/", $_SERVER['REQUEST_URI']);
	// This starts with a slash so remove the first element
	array_shift($redirect_url);
	define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/".reset($redirect_url)."/");
	define("PRODUCTION", false);
}else{
	define("DEV", false);
	if($_SERVER['SERVER_NAME']==LIVESERVERNAME){
		define("PRODUCTION", TRUE);
	}else{
		define("PRODUCTION", FALSE);
	}
	define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/");
}
define("SITENAME", "Sample Project");