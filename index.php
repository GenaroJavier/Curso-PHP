<?php 
    //Especificamos el archivo, si esta dentro de otra carpeta aqui se tiene que poner la rutacontenido.txt
    $archivo="contenido.txt"; 

    //Abrimos el archivo con la funcion open y especificamos que el formato es de lectura 
    $archivoAbierto=fopen($archivo, "r"); 

    //Leemos el contenido y lo almacenamos dentro de la variable
    //el segundo parametro es el peso del archivo. 
    $contenido = fread($archivoAbierto, filesize($archivo)); 

    echo $contenido; 
?>