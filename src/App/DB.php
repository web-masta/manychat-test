<?php
	
	namespace Ivan\App;
	
	use Ivan\controllers\Config;
	use PDO;
	
	class DB
	{

		private static $connection = null;
		private static $config;
		
		public function __construct() {
			$cnfg = new Config();
			self::$config = $cnfg->load();
		}
		
		public static function instance()
		{
			
			if (null === self::$connection) {
				
				$configObj = new Config();
				$config = $configObj->load();
				
				self::$connection = new PDO(
					"mysql:host={$config['db_host']};dbname={$config['db_name']};charset={$config['db_charset']}",
					$config['db_user'],
					$config['db_password']
				);
			}
			
			return self::$connection;
		}
	}