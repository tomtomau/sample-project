<?
include_once("inc/config.php");
if(!isset($_SERVER['REDIRECT_URL'])||strlen($_SERVER['REDIRECT_URL'])==0||$_SERVER['REDIRECT_URL']=="/"){
	include_once("page/index.php");
	die;
}
$URL = explode("/", rtrim($_SERVER['REDIRECT_URL'],"/"));
array_shift($URL);
if(DEV){
	array_shift($URL);
}
$file = $URL[0];
$a = "as";
preg_match("/[a-zA-Z]*/", $file, $file);
$file = reset($file);
if(file_exists("page/".$file.".php")){
	include_once("page/".$file.".php");
	die;
}else{
	include_once("page/error.php");
	die;
}

?>