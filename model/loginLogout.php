
<?php


  class loginLogout {

    public function __construct(Database $db) {

      $this->db = $db;

    }

    public function login {

      if (!isset($_POST['login']) OR empty($_POST['login'])) {
        $_SESSION["feedback_negative"][] = FEEDBACK_USERNAME_FIELD_EMPTY;
        return false;
      }
      if (!isset($_POST['password']) OR empty($_POST['password'])) {
        $_SESSION["feedback_negative"][] = FEEDBACK_PASSWORD_FIELD_EMPTY;
        return false;
      }

      //obtener los datos del usuario
      $datosUsuario = $this->db->prepare("SELECT ID,
                                         nombre,
                                         apellidos,
                                         login,
                                         password,
                                         email
                                  FROM   users
                                  WHERE  login = :login");

      $datosUsuario->execute(array(':login' => $_POST['login']);
      $count =  $datosUsuario->rowCount();
      // si la cuenta es distinta a 1
      if ($count != 1) {
          $_SESSION["feedback_negative"][] = FEEDBACK_LOGIN_FAILED;
          return false;
      }
      // fetch one row (we only have one result)
      $result = $datosUsuario->fetch();
    }

    public function logout() {
      setcookie('recuerdame', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN);
      //cual de las 2))
      Session::destroy();
      session_destroy();
      header("location:index.php");
    }
  }





try {
	$consulta_sql = "SELECT * FROM usuarios where login='$login' and password='$password'";
	$respuesta_sql = $db->prepare($consulta_sql);
	$respuesta_sql->execute();

	$filas_contadas=$respuesta_sql->rowCount();
	if ($filas_contadas != 0){
		//iniciamos sesion antes de redirigir al usuario a su pagina
		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("location:inicio.php");
	}else{
		header("location:form_registro.php");
	}

} catch (PDOException $e) {
	echo $e->getMessage();
}
