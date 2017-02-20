
<?php


  class loginLogout() {
    private $conectar;
    private $db;
    private $tabla = usuarios;

    //inicio constructor
    public function __construct($tabla) {
      $this->tabla =(string) $tabla;

      require_once 'conectarBBDD.php';
      $this->Conectar = new Conectar();
      $this->db=$this->conectar->conexion();
    }
    //fin constructor

    //inicio funcion login
    public function login() {
      private $login;
      private $password;

      try {
        if (!isset($_POST['login']) OR empty($_POST['login'])) {
          $_SESSION["feedback_negative"][] = FEEDBACK_USERNAME_FIELD_EMPTY;
          return false;

        } elseif (!isset($_POST['password']) OR empty($_POST['password'])) {
          $_SESSION["feedback_negative"][] = FEEDBACK_PASSWORD_FIELD_EMPTY;
          return false;

        } else {
          require_once 'c_login.php';
          $consulta_sql = "SELECT * FROM usuarios where login='$login' and password='$password'";
          $respuesta_sql = $db->prepare($consulta_sql);
          $respuesta_sql->execute();

        	$filas_contadas=$respuesta_sql->rowCount();
          return $filas_contadas;
        }
      }
      catch (PDOException $e) {
    	   echo $e->getMessage();
      }
    }
      //fin funcion login

      //inicio funcion logout
      public function logout() {
        setcookie('recuerdame', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN);
        //cual de las 2??
        Session::destroy();
        session_destroy();
        header("location:index.php");
      }
    //fin funcion logout
    }
  }
