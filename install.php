<?php
	
	$autoload = dirname(__FILE__) . '/vendor/autoload.php';
	if(file_exists($autoload)) {
		require_once $autoload;
	}
	
	$DBstructure = BASE . '/src/App/db/structure.sql';
	$DBdata = BASE . '/src/App/db/data.sql';
			
	if(file_exists($DBdata) && file_exists($DBstructure)) {
	
		$queryStructure = file_get_contents($DBstructure);
		$queryData = file_get_contents($DBdata);
		
		\Ivan\App\DB::connect()->exec($queryStructure);
		\Ivan\App\DB::connect()->exec($queryData);
		
		header('Location: ' . \Ivan\App\Config::baseUrl());
		
	
	}