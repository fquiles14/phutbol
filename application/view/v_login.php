<?php
	include "navbar.php";
	include "../controller/C_Login.php";
	if (isset($_POST['submit'])) {
		$nuevologin = new C_Login();
		$nuevologin->logarse($_POST['login'],$_POST['password']);
	}

?>

<html>
	<head>
		<title>Nombre - Mánager de Fútbol Online</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Login</h2>
					<form role="form" name="login" action="" method="post">
			  		<div class="form-group">
			    		<label for="login">Nombre de usuario</label>
			    		<input type="text" class="form-control" id="login" name="login" placeholder="Nombre de usuario">
			  		</div>
			  		<div class="form-group">
			    		<label for="password">Contrase&ntilde;a</label>
			    		<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
			  		</div>
		  			<button type="submit" name="submit" class="btn btn-default">Acceder</button>
					</form>
				</div>
			</div>
		</div>
		<script src="application/view/js/valida_login.js"></script>
	</body>
</html>
