<?
include_once("rain.tpl.class.php");

raintpl::configure("base_url", null );
raintpl::configure('path_replace', false );
raintpl::configure("tpl_dir", "templates/" );
raintpl::configure("cache_dir", "tmp/" );
raintpl::configure("php_enabled", true );

$tpl = new RainTPL;
$tpl->assign("rootdir", BASE_URL);
$tpl->assign("production", PRODUCTION);
$tpl->assign("sitename", SITENAME);
$tpl->assign("author", "Tom Newby");
$tpl->assign("google_site_verification", "abcd123");

$pages = array(
	array("title"=>"Home", "link"=>""),
	array("title"=>"About", "link"=>"about"),
);
$tpl->assign("pages", $pages);
?>