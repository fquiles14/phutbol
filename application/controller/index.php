
<?php
class Index extends Controller {

  function __construct() {
    parent::__construct();
    /*
    *
    * try {
    *   $this->db = new Database();
    * } catch (PDOException $e) {
    *     die('No se ha podido realizar la conexión con la base de datos.');
    *   }
    * $this->view = new View();
    *
    */
  }

  function index() {
    $this->view->render( VIEWS_PATH . 'index.php' );
  }
}
