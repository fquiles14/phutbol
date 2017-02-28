<?php

  function autoload($class) {
     if (file_exists(LIBS_PATH . $class . ".php")) {
          require LIBS_PATH .$class. ".php";
      } else {
          exit ('El fichero ' . $class . '.php no se encuentra en la carpeta libs.');
      }
  }

spl_autoload_register("autoload");
