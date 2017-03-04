<?php


class Conectar extends PDO {
	public function __construct() {
		//require '../config/config.php';
  	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
  	parent::__construct("mysql:host=localhost; dbname=phutbol", "alvaro", "alvaro");
	}
}
