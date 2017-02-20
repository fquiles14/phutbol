<?php

if($_POST["nombre"]!=""&& $_POST["apellido1"]!=""&&$_POST["apellido2"]!=""&&$_POST["login"]!=""&&$_POST["password"]!=""&&$_POST["email"]!=""){

require 'm_registro.php'
  $registro1 = new Registro($_POST["nombre"],$_POST["apellido1"],$_POST["apellido2"],$_POST["login"],$_POST["password"],$_POST["email"]);
	} else {
      header("location:../view/v_registro.php");
    }

if ($result = true) {
  header("location:../view/v_login.php");
}





?>
