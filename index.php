<?php
// By including this file, we can assume $tpl is in scope
include_once("inc/RainTPL.php");
// By including this file, we can assume $db is in scope
include_once("inc/db.php");

function getVegetables($db){
	try{
		$query = "SELECT * FROM vegetables";
		$statement = $db->prepare($query);
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $results;
	}catch(PDOException $e){
		var_dump($e);
	}
}


$vegetables = getVegetables($db);

$tpl->assign("vegetables", $vegetables);
$tpl->assign("body", "demo");
$tpl->draw("bootstrap_base");

?>