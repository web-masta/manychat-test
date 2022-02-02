<?php
	
	
	namespace Ivan\controllers\App;
	
	
	class Controller
	{
		public $out;
		
		public function render($data) {
			$this->out = [
				//'filename' => dirname(__FILE__,3) . '/views/' . $this->getFolder() . '/' . $data['view'] . '.php',
				'filename' => dirname(__FILE__,3) . '/views/' . $data['view'] . '.php',
				'data' => $data['params']
			];
			
			return $this->out;
		}
	}