<?php

class Database{

	public static function connection(){
	
		$dbArray = require_once 'dbInfo.php';

		$db = new mysqli($dbArray['host'], $dbArray['user'] , $dbArray['pass'], $dbArray['database']);
		$db->query("SET NAMES '{$dbArray['charset']}';");
		return $db;
	}
}   