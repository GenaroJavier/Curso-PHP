<?php

class Conexion {
  public $servidor="localhost"; 
  public $usuario="root";
  public $pass=""; 

  function RealizarConexion(){
    try {
      $conexion = new PDO("mysql:host=$servidor;dbname=bd_portafolio", $usuario, $pass);  
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }  catch (PDOException $error) {
      echo "Error en la conexion: ".$error; 
    }  
  }

  function BuscarUsuario($correo, $pass) {
    $encontrado = false; 
    $consulta = "SELECT * FROM `tbl_usuario`";
    $sentencia=$conexion->prepare($consulta); 
    $sentencia->execute(); 
    $resultado=$sentencia->fetchAll(); 

    foreach ($resultado as $registro) {
      if ($correo==$registro['Correo'] && $pass==$registro['Pass']) {
        $encontrado = true; 
        break; 
      }
    }
  
    if ($encontrado == true) 
      echo "Usuario encontrado"; 
      else 
        echo "Usuario No encontrado"; 
  }

}

?>