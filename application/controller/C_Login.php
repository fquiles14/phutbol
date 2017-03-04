<?php
  class C_Login {

  //inico constructor
  public function logarse($user, $password){
    require_once '../model/M_Login.php';
    $login = new M_Login();
    $autenticado=$login->login($user,$password );

  	if ($autenticado == true){
  		//iniciamos sesion antes de redirigir al usuario a su página
  		session_start();
  		$_SESSION["usuario"]=$_POST["login"];
  		header("location:../view/home.php");
  	}else{
  		header("location:../view/v_registro.php");
  	}
  }
  //fin constructor
}


?>
