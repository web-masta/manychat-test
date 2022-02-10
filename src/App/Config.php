<?php
	
	namespace Ivan\App;
	
	class Config
	{
		private static $config_file;
		
		public static function load() {
			
			self::$config_file = BASE . '/src/config.php';
			
			if (file_exists(self::$config_file)) {
				return include self::$config_file;
			} else {
				return self::$config_file;
			}
		}
		
		public static function baseUrl(){
			return (!empty(Config::load()['base']) && Config::load()['base'] != '/') ? '/'. Config::load()['base'] . '/' : '/';
		}
	}