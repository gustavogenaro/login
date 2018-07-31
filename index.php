<?php
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Funcoes\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){ #define a rota para chamada do arquivo

	$page = new Page();

	$page->setTpl("index");	
});

$app->run();

?>