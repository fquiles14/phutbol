<?php
  class C_Login {

  //inico constructor
  public function __construct(){
    require_once 'application/model/M_Login.php';
    $login = new M_Login();
    $autenticado=$login->login($_POST["login"],$_POST["passord"] );

  	if ($autenticado = true){
  		//iniciamos sesion antes de redirigir al usuario a su página
  		session_start();
  		$_SESSION["usuario"]=$_POST["login"];
  		header("location:application/view/home.php");
  	}else{
  		header("location:application/view/v_registro.php");
  	}
  }
  //fin constructor
}


?>
