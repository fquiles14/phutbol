<?php


	class Conectar {

		public static function conexion() {

			try {

				$db = new PDO("mysql:host=localhost; dbname=juego", "juego", "juego");
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$db->exec("SET CHARACTER SET UTF8");

			} catch (PDOException $e) {

				die("Error" . $e->getMessage());
				echo "Línea del error " . $e->getLine();

			}

			return $db;
		}
	}
