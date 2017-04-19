<?php

require 'vendor/autoload.php';


$app = new \Slim\App();



$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__.'/resources/views', [
        'cache' => false,
    ]);
    
    // Instantiate and add Slim specific extension
    $view->addExtension(new Slim\Views\TwigExtension(
    	$container->router, 
    	$container->request->getUri()
    ));

    return $view;
};


// Define app routes
$app->get('/', function ($request, $response, $args) use($app){
  		$var=array("hola");
        return $this->view->render($response, 'home.twig',$var);
});

// Run app
$app->run();