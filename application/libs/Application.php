<?php

class Application
{
  public function __construct() {
    require CONTROLLER_PATH . 'index.php';
    $controller = new Index();
    $controller->index();
  }
}
