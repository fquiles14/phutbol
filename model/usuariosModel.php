<?php

  class UsuariosModel {

    private $db;
    private $usuarios;

    public function __construct(){
      require_once ("model/conectarBBDD.php");
      $this->db=Conectar::conexion;
      $this->usuarios=array();
    }

    public function getUsuarios(){
      $consulta = $this->db->query("SELECT * FROM usuarios");
      while ($fila = $consulta -> fetch(PDO::FETCH_ASSOC)) {
        $this->usuarios[]=$fila;
      }
      return $this->usuarios;
    }

  }
