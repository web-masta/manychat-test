<?php
	
	
	namespace Ivan\App;
	
	use Ivan\App\DB;
	
	class Model extends DB
	{
		protected static $table;
		protected static $id;
		
		public static function getAll() {
			
			$query = "SELECT * FROM " . static::$table;
			
			return self::connect()->query($query)->fetchAll();
		}
		
		public static function getById(int $id, $col = null) {
			$col = $col ?? '*';
			$query = "SELECT ". $col ." FROM " . static::$table . " WHERE id = " . (int) $id;
			return self::connect()->query($query)->fetchAll();
		}
		
		public static function create(Array $data) {
			
			$cols = [];
			$placeholders = [];
			$values = [];
			
			$cols[] = 'created';
			$placeholders[] = ':created';
			$values['created'] = date("Y-m-d H:i:s");
			
			foreach ($data as $key => $value) {
				if(!empty($value)) {
					$cols[] = htmlspecialchars($key);
					$placeholders[] = ':' . htmlspecialchars($key);
					$values[$key] = htmlspecialchars($value);
				}
			}
			
			$query = "INSERT INTO " .  static::$table . " (".implode(',', $cols).") VALUES (".implode(',', $placeholders).")";
			
			$prepare = self::connect()->prepare($query);
			return $prepare->execute($values);
		}
		
		public static function update(Array $data) {
			
			$placeholders = [];
			$values = [];
			
			$placeholders[] = 'updated = :updated';
			$values['updated'] = date("Y-m-d H:i:s");
			
			foreach ($data as $key => $value) {
				if(!empty($value) && $key != 'id') {
					$placeholders[] = $key . ' = :' . htmlspecialchars($key);
					$values[$key] = htmlspecialchars($value);
				}
			}
			
			$query = "UPDATE " .  static::$table . " SET ".implode(', ', $placeholders)." WHERE id = " . (int) $data['id'];
			
			$prepare = self::connect()->prepare($query);
			
			return $prepare->execute($values);
		}
		
		public static function delete(int $id) {
			$query = "DELETE FROM " .  static::$table . " WHERE id = " . (int) $id;
			return self::connect()->query($query)->execute();
		}
	}