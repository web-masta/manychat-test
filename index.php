<?php
	use \Ivan\App\Routing;

	$autoload = dirname(__FILE__) . '/vendor/autoload.php';
	if(file_exists($autoload)) {
		require_once $autoload;
	}
	
	$path = strtok($_SERVER['REQUEST_URI'], '?');
	
	$route = new Routing($path);
	
		$controller = '\\Ivan\\controllers\\' . $route->getController();
		
		$method = $route->getMethod();
		
	$app = new $controller();
	
	if(method_exists($app, $method)) {
		$content = $app->$method();
	} else {
		$content['filename'] = '404.php';
	}
	
	require dirname(__FILE__) . '/src/views/layouts/html.php';