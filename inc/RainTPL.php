<?php
include_once("rain.tpl.class.php");
raintpl::configure("base_url", null );
raintpl::configure("tpl_dir", "tpl/" );
raintpl::configure("cache_dir", "tmp/" );
//initialize a Rain TPL object, can now assume it is in scope when this is included
$tpl = new RainTPL;
?>