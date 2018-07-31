<?php
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Funcoes\Page;
use \Funcoes\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){ #define a rota para chamada do arquivo

	$page = new Page();

	$page->setTpl("index");	
});

$app->get('/admin', function(){ #define a rota para chamada do arquivo

	$page = new PageAdmin();

	$page->setTpl("index");	
});

$app->run();

?>