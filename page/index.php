<?
include_once("inc/tpl.php");
include_once("inc/db.php");
$tpl->assign("page", "index");
$tpl->assign("title", "Index Page!");
$tpl->assign("body", "This is the index page!");
$tpl->draw("homepage");
?>