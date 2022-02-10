<?php
	
	namespace Ivan\App;
	
	use Ivan\App\Config;
	use PDO;
	
	class DB
	{
		public static function connect()
		{
			$config = Config::load();
			$dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset={$config['db_charset']}";
			
			try {
				
				$pdo = new PDO($dsn, $config['db_user'], $config['db_password']);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $pdo;
				
			} catch (\PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
	}