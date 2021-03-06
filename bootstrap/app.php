<?php

session_start();
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/config.php';
$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view']=//function($container){
/*$view = */new \Slim\Views\PhpRenderer(__DIR__.'/../resources/views/');


/*
	$view->addExtension(new \Slim\Views\TwigExtension(
			$container->router,
			$container->request->getUri()
		));

	return $view;
};
*/
$container['HomeController']=function($container){
	return new \App\Controllers\HomeController($container);
};

require __DIR__ .'/../app/routes.php';