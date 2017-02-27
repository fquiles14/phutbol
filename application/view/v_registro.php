<?php include "navbar.php"; ?>

<html>
	<head>
		<title>Nombre - Mánager de Fútbol Online</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="../controller/c_registro.php" method="post">
		  <div class="form-group">
		    <label for="Nombre">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de usuario" required>
		  </div>
		  <div class="form-group">
		    <label for="fullname">Apellido 1</label>
		    <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer apellido" required>
		  </div>
			<div class="form-group">
		    <label for="fullname">Apellido 2</label>
		    <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido">
		  </div>
			<div class="form-group">
		    <label for="login">Login</label>
		    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required>
		  </div>
			<div class="form-group">
				<label for="email">Correo Electronico</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required>
			</div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="/view/js/valida_registro.js"></script>
	</body>
</html>
