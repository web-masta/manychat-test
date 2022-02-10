<?php
	
	
	namespace Ivan\App;
	
	
	use Ivan\App\Config;
	
	//use RuntimeException;
	
	class Routing
	{
		
		private $path;
		private $out;
		
		public function __construct($url) {
			
			$config = Config::load();
			
			$this->path = str_replace($config['base'] . '/', '', htmlspecialchars($url));

			// Переписываем переданный путь в массив
			$controllerPathData = explode('/', $this->path);
			
			// Файл контроллера - первый элемент после слеша в пути
			// Если мы в корне - вызываем стандартный контроллер SiteController
			if (empty($controllerPathData[1]) || $controllerPathData[1] == 'index.php') {
				$controller = 'SiteController';
			} else {
				$controller = $controllerPathData[1] . 'Controller';
			}
			
			$controllerPath = BASE . '/src/controllers/' . ucwords($controller) . '.php';
			
			// Вызываемый метод - вся последняя часть URL после второго слеша
			// Если метод не указан, вызываем стандартный метод actionIndex()
			$controllerMethod = empty($controllerPathData[2])
				? 'actionIndex'
				: 'action' . implode('', array_map('ucwords', array_slice($controllerPathData, 2)));
			
			if(file_exists($controllerPath)) {
				$this->out = [
					'controller_path' => $controllerPath,
					'controller' => ucwords($controller),
					'method' => $controllerMethod,
					'get' => $_GET,
					'post' => $_POST,
				];
				
				return;
			}

			// Выбрасываем 404, если контроллер не найден
			return $this->notFound();
		}
		
		public function getController()
		{
			return $this->out['controller'];
		}
		
		public function getMethod()
		{
			return $this->out['method'];
		}
		
		public function getGet()
		{
			return htmlspecialchars($this->out['get']);
		}
		
		public function getPost()
		{
			return htmlspecialchars($this->out['post']);
		}
		
		public function notFound() {
			// throw new RuntimeException("Route not found", 404);
			http_response_code(404);
			include dirname(__FILE__,2) . '/views/layouts/404.php';
			//die;
		}
		
	}