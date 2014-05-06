<?
include_once("inc/tpl.php");
$tpl->assign("body", "Could not find the page you were looking for: ".implode("/",$URL));
$tpl->assign("title", "Error");
$tpl->draw("text_page");
?>