<?php
	
	
	namespace Ivan\App;
	
	class Controller
	{
		public function render($data) {
			return [
				'filename' => dirname(__FILE__,2) . '/views/' . $data['view'] . '.php',
				'data' => $data['params'],
			];
		}
	}