<?php
	
	namespace Ivan\controllers\Database;
	use Ivan\controllers\Config;
	
	class DB
	{

		private static $connection;

		public static function instance()
		{
			
			if (null === self::$connection) {
				
				$config = new Config();
				
				self::$connection = new \PDO(
					"mysql:host={$config->load()['db_host']};dbname={$config->load()['db_name']};charset={$config->load()['db_charset']}",
					$config['db_user'],
					$config['db_password']
				);
			}
			
			return self::$connection;
		}
	}