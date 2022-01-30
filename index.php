<?php
/**
 * Ejemplo de uso de cadenas json
 * 
 * Este tipo de cadenas nos pemiten obtener y mandar datos cuando hacemos uso de una API 
 * 
 * codificacion
 */

    $Personas = array(
        "nombre" => "Genaro Javier",
        "edad" => 21,
        "puesto" => "Programacion"
    );

    $resultado = json_encode($Personas); 
    print ($resultado); 
    
?>
