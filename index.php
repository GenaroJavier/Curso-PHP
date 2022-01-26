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

        //Consulta SQL para obtener todos los datos
        $sql = "SELECT * FROM `fotos`";

        //Ejecuta la consulta, para ejecutar con PDO y almacenar los resultados en la variable prepare
        $sentencia = $conexion->prepare($sql); 

        //Ejecutamos con el metodo execute 
        $sentencia->execute(); 

        //Obtenemos los datos con el metodo fetchall que nos va a devolver todos los resultados de la setencia. (nos devuelve un arreglo)
        $resultado=$sentencia->fetchAll(); 

        //Recorremos ese arreglo
        foreach ($resultado as $registro){
            print_r("<br>".$registro['nombre']); 
        }
        
        } catch (PDOException $error) {
         echo "Error en la conexion: ".$error; 
     }

     /***
      * El A_I en MySQL significa Auto Incremental 
      lo que nos permite ir incrementando un dato automaticamente
      */

?>
