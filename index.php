<?php
/**
 * Ejemplo de uso de cadenas json
 * 
 * Este tipo de cadenas nos pemiten obtener y mandar datos cuando hacemos uso de una API 
 */

 //Ejemplo de estructura de cadena JSON
    $ejemplo = '[
        {"nombre":"Genaro", "apellido":"Perez"},
        {"nombre":"Jacinto", "apellido":"Gutierrez"},
        {"nombre":"Oliver", "apellido":"Camargo"},
        {"nombre":"Antonio", "apellido":"Rodriguez"}
    ]'; 

    /**
     * Con la función json_decode, podemos convertir nuestra cadena json a una array y poder 
     * acceder a los datos con mayor facilidad. Recibe la cadena json. 
     */
    $resultado = json_decode($ejemplo); 

    //for para recorrer el array que nos devolvio la funcion. 
    foreach ($resultado as $persona) {
        print($persona->nombre." ".$persona->apellido."<br>"); 
    }
?>
