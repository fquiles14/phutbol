<!doctype html>
<html>
<body>
  <table>
  <tr><td></td>

<?php

  foreach ($arrayUsuarios as $linea) {
    echo "<tr><td>" . $linea["ID"] . "-" . $linea["Nombre"] . "-" . $linea["Apellidos"] . "-" . $linea["Login"] . "-" . $linea["password"] . "-" . $linea["email"] . "</tr></td>";
  }


?>
  </table>

</body>
</html>
