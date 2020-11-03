<?php

class Database{

	public static function connection(){

		$dbArray = require_once 'dbInfo.php';

		$db = new mysqli('localhost', 'root' , '', 'tasklist');
		$db->query("SET NAMES utf-8';");
		return $db;
	}
}
