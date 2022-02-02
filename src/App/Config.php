<?php
	
	
	namespace Ivan\controllers;
	
	
	class Config
	{
		private static $config_file;
		
		public function load() {
			$this->config_file = dirname(__FILE__, 2) . '/config.php';
			if (file_exists($this->config_file)) {
				return include $this->config_file;
			}
		}
	}