<?php
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){

	$sql = new Funcoes\DB\Sql();

	$results = $sql->select("SELECT * FROM user");

	echo json_encode($results);
});

$app->run();

?>