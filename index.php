<!--<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Nombre - Mánager de Fútbol Online</title>
      <link rel="stylesheet" type="text/css" href="./view/css/style.css">
  </head>
  <body>
    <div id="banner">
      <div id="banner-content">
        <a class="navbar-brand" href="index.php"><b>HOME</b></a>
        <a href="./view/v_registro.php">REGISTRO</a>
        <a href="./view/v_login.php">LOGIN</a>
      </div>
    </div>
    <div id="main-content">
      <h2>Nombre - Mánager de Fútbol Online</h2>
      <p>Administra tu propio equipo y crea con tus amigos una liga virtual. Sólo tú eres el responsable del equipo, de las tácticas y de los fichajes. Tus habilidades financieras y estratégicas son decisivas para alzarte con el trofeo Campeón de Liga. ¿Juegas? Adelante regístrate ¡Es gratis!</p>
    </div>
  </body>
</html>
-->
<?php
require 'application/config/config.php';


require 'application/config/autoload.php';


if (file_exists('vendor/autoload.php')) {
  require 'vendor/autoload.php';
}


autoload(Application);
$app = new Application();
