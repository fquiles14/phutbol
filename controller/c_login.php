<?php
  class ControladorLogin{
    public $login;
    public $password;
    private $loginLogout;
    private $login;

  //inico constructor
  public function __construct(){
    require_once 'm_login.php';
    $this->loginLogout = new loginLogout();
    $this->login=$this->loginLogout->login();

  	if ($filas_contadas = 1){
  		//iniciamos sesion antes de redirigir al usuario a su página
  		session_start();
  		$_SESSION["usuario"]=$_POST["login"];
  		header("location:../view/inicio.php");
  	}else{
  		header("location:../view/v_registro.php");
  	}
  }
  //fin constructor
}


?>
