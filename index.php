<?php 
//Ahora nosotros vamos a escribir dentro de un archivo 
 $nombreArchivo="archivo.txt"; 

 //Contenido
 $contenidoArchivo = "Hola estamos escribiendo dentro de un archivo"; 

 //Abrimos el archivo, especificamos el nombre y el modo de ejecucion; 
 $CrearArchivo = fopen($nombreArchivo, "w"); 

 //Escribimos en el archivo, especificamos en que archivo vamos a escribir y el contenido que estara dentro. 
 fwrite($CrearArchivo, $contenidoArchivo); 
 fclose($CrearArchivo); 

?>