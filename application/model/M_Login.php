
<?php
  class M_Login {

    //inicio constructor
    /*public function __construct() {
      require_once '../libs/Conectar.php';
      $db = new Conectar();
    }*/

    //fin constructor

    //inicio funcion login
    public function login($Login, $password) {
      //private $db;
      require_once '../libs/Conectar.php';
      $db = new Conectar();
      try {
        if (!isset($_POST['login']) OR empty($_POST['login'])) {
          $_SESSION["feedback_negative"][] = FEEDBACK_USERNAME_FIELD_EMPTY;
          return false;

        } elseif (!isset($_POST['password']) OR empty($_POST['password'])) {
          $_SESSION["feedback_negative"][] = FEEDBACK_PASSWORD_FIELD_EMPTY;
          return false;

        } else {
          require_once '../controller/C_Login.php';
          $consulta_sql = "SELECT * FROM usuarios where login='$login' and password='$password'";
          $respuesta_sql = $db->prepare($consulta_sql);
          $respuesta_sql->execute();

        	$filas_contadas=$respuesta_sql->rowCount();
          if ($filas_contadas = 1) {
            return $result = true;
          } else {
              return $result = false;
            }
          }
      } catch (PDOException $e) {
    	   echo $e->getMessage();
      }
    }
    //fin funcion login

    //inicio funcion logout
    public function logout() {
      setcookie('recuerdame', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN);
      //cual de las 2??
      session_destroy();
      header("location:index.php");
    }
    //fin funcion logout
  }
