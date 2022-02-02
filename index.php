<?php
	use \Ivan\controllers\App\Routing;
	//use \Ivan\controllers\SiteController;
	$autoload = dirname(__FILE__) . '/vendor/autoload.php';
	if(file_exists($autoload)) {
		require_once $autoload;
	}
	
	$route = new Routing($_SERVER['REQUEST_URI']);
	
	$controller = '\\Ivan\\controllers\\' . $route->getController();
	$method = $route->getMethod();
	
	//echo $controller;
	//echo '<BR>';
	//echo $method;
	
	$app = new $controller();
	
	if(method_exists($app, $method)) {
		$content = $app->$method();
	} else {
		$content['filename'] = '404.php';
	}
	
	require dirname(__FILE__) . '/src/views/layouts/html.php';