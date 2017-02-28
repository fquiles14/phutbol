<?php

	class Conectar {
		private $driver;
		private $host, $user, $pass, $database, $charset;

		public function __construct(){
			$configuracion_db = require_once 'application/config/config.php';
			$this->driver=$configuracion_db["driver"];
			$this->host=$configuracion_db["host"];
			$this->user=$configuracion_db["user"];
			$this->pass=$configuracion_db["pass"];
			$this->database=$configuracion_db["database"];
		}

		public function conexion(){
		  $conexion = new PDO($this->driver.":host=".$this->host.":dbname=".$this->database, $this->user, $this->pass);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");

      return $conexion;
    }
	}
