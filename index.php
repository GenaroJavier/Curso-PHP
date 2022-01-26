<?php 
    /**
     * Conexion a la BD_Album
     */

     //127.0.0.1 
     $servidor = "localhost"; 
     //Usuario
     $usuario="root";
     //Contraseña
     $pass=""; 

     try {

         /**
          * Utilizamos la clase PDO que nos permite conectarnos a la BD
          * en la cual recibe la base de datos  a la que queremos realizar la conexion 
          * el host que seria la ruta, como nosotros estamos trabajando de manera local ponemos el localhost 
          * el nombre de la base de datos
          * usuario y contraseña
          */
         $conexion = new PDO("mysql:host=$servidor;dbname=BD_Album", $usuario, $pass); 
         
         //Estos metodos estaticos nos permiten verificar si se genera un error durante la conexion
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
         echo "Conexion Exitosa"; 


        //Insertar en la BD

        //Consulta SQL para insertar
        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Imagen 1', '/Documents/Curso-PHP/imagenes/');";
        $conexion->exec($sql);

        } catch (PDOException $error) {
         echo "Error en la conexion: ".$error; 
     }

     /***
      * El A_I en MySQL significa Auto Incremental 
      lo que nos permite ir incrementando un dato automaticamente
      */

?>
