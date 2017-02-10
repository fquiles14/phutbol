<?php include "navbar.php"; ?>



<!--<?php session_start(); ?>-->


<html>
	<head>
		<title>Nombre - Mánager de Fútbol Online</title>
		<link rel="stylesheet" type="text/css" href="../view/bootstrap/css/bootstrap.min.css">
	</head>
	<body>

<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>

		<form role="form" name="login" action="v_login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="/view/js/valida_login.js"></script>
	</body>
</html>
