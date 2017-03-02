<?php

class Session {

  // funcion que inicia la sesion
  public static function init() {
    // si no existe la sesion la inicia
    if (session_id() == '') {
      session_start();
    }
  }

  // funciín que destruye la sesión
  public static function destroy() {
    session_destroy();
  }
}
