<?php

	class Conectar {

		public function __construct() {
			require_once '../config/config.php';
		}

		public function conexion(){
		  $conexion = new PDO(driver.":host=".host.":dbname=".database, user, pass);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");

      return $conexion;
    }
	}
