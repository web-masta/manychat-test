<?php
	
	
	namespace Ivan\App;
	
	class Controller
	{
		public function render($data) {
			return [
				'filename' => BASE . '/src/views/' . $data['view'] . '.php',
				'params' => $data['params'],
			];
		}
		
		public function goto($uri) {
			header('Location: ' . $uri);
			die();
		}
		
		public function postMethod() {
			return ($_SERVER['REQUEST_METHOD'] === 'POST');
		}
		
		public function getGet()
		{
			$get = [];
			foreach ($_GET as $key => $value) {
				$get[$key] = htmlspecialchars(trim($value));
			}
			
			return $get;
		}
		
		public function getPost()
		{
			$post = [];
			foreach ($_POST as $key => $value) {
				$post[$key] = htmlspecialchars(trim($value));
			}
			
			return $post;
		}
	}