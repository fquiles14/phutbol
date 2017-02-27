<?php

  class Registro(){
    private $nombre=$_POST['nombre'];
    private $apellido1=$_POST['apellido1'];
    private $apellido2=$_POST['apellido2'];
    private $login=$_POST['login'];
    private $password=$_POST['password'];
    private $email=$_POST['email'];
    private $conectar;
    private $db;

    public function __construct($nombre,$apellido1,$apellido2,$login,$password,$email){
      require_once 'conectarBBDD.php';
      $this->Conectar = new Conectar();
      $this->db=$this->conectar->conexion();
      try {
        $consulta_sql = "INSERT INTO usuarios (nombre,apellido1,apellido2,login,password,email)
        VALUES ('$nombre','$apellido1','$apellido2','$login','$password','$email')";
        $result->query($consulta_sql);
        return $result=true;
      }catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
  }
