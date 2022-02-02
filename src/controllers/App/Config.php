<?php
	
	
	namespace Ivan\controllers;
	
	
	class Config
	{
		public function load() {
			$this->config_file = dirname(__FILE__, 2) . '/config.php';
			if (file_exists($this->config_file)) {
				return require $this->config_file;
			}
		}
	}