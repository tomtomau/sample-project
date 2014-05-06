<?
include_once("inc/tpl.php");
include_once("inc/db.php");
$tpl->assign("page", "about");
$tpl->assign("title", "About Page!");
$tpl->assign("body", "This is the about page!");
$tpl->draw("text_page");
?>