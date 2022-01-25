<?php

//Arreglos numericos
$frutas = array('Manzana', 'Pera', 'Durazno'); 
print_r($frutas); 

//Arreglos asociativos
$verduras = array(
    "f" => "Fresa", 
    "p" => "Pera", 
    "m" => "Manzana"
); 

/**
 * En lugar de una posicion, nosotros especificamos el indice con el que queremos que se 
 * identifique. 
 */

echo "<br>"; echo "<br>"; 

 for ($i=0; $i < 3; $i++) { 
     echo $frutas[$i]."<br>"; 
 }

 echo "<br>"; echo "<br>"; 

 foreach ($verduras as $verdura => $valor) {
     echo $verdura." = "."$valor"."<br>";
     echo "<br>"; 
     echo $verduras[$verdura]; 
     echo "<br>"; 
     echo "<br>"; 
 }

?>