<?php
  class Controller {
  private $db;
    function __construct() {

      try {
        $db = new Conectar();

      } catch (PDOException $e) {
          die('No se ha podido realizar la conexión con la base de datos.');
        }

    $this->view = new View();
    }

  /*  public function loadModel($name) {
      $path = MODELS_PATH . strtolower($name) . '_model.php';
          if (file_exists($path)) {
              require MODELS_PATH . strtolower($name) . '_model.php';
              // The "Model" has a capital letter as this is the second part of the model class name,
              // all models have names like "LoginModel"
              $modelName = $name . 'Model';
              // return the new model object while passing the database connection to the model
              return new $modelName($this->db);
          }
      }*/
  }
