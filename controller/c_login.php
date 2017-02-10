<?php
$db = new PDO("mysql:host=localhost;dbname=logo","quiles","quiles");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $username=$_POST['login'];
  $password=$_POST['password'];

try{
  $sql="SELECT * FROM usuarios where login='$username' and password='$password'";
  $query = $db->prepare($sql);
  $query->execute();
  $resultado=$query->fetch();
  if ($resultado['password']==$password){
    session_start();
	$_SESSION["username"] = '$username';
				print "<script>window.location='../views/home.php';</script>";
  }else {
    print "<script>alert(\"Usuario o Contraseña errónea. Inténtelo de nuevo\");window.location='../controllers/login.php';</script>";
  }

}
catch (PDOException $e) {
  echo $e->getMessage();
}
?>
