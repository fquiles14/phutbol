<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<h1 align="center">Formulario de login</h1>
	<form action="comprueba_login.php" method="post">
		<table align="center">
    		<tr>
      			<td>Login:</td>
      			<td><label for="nombre_usuario"></label>
      			<input type="text" name="login"></td>
    		</tr>
    		<tr>
      			<td>Password:</td>
				<td><label for="password_usuario"></label>
			  	<input type="text" name="password" ></td>
			</tr>
			<tr>
      			<td><input type="submit" name="enviar" value="Entrar"></td>
				<td><input type="button" name="registro" onclick="location.href='form_registro.php'" value="Regristro"></td>
    		</tr>
  		</table>
	</form>
<?php
	require_once("controller/usuarioscontroller.php");


 ?>




</body>
</html>
