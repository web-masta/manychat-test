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
	}