<?php
	
	namespace Ivan\models;
	
	use Ivan\App\DB;
	
	class ReportModel extends DB
	{
		public static function getReport() {
			
			$query = "SELECT COALESCE(SUM(employees.salary), 0) as money, projects.id as id, projects.name as name from projects
					LEFT join employees on (employees.project_id = projects.id)
					GROUP by projects.id
					ORDER by money DESC";
			
			return self::connect()->query($query)->fetchAll();
		}
	}