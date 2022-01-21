<?php

$edad = 101; 

print '<h2>If</h2>'; 

if ($edad >= 18 && $edad < 60) {
    echo('Felicidades eres mayor de edad'); 
} elseif ($edad >= 60) {
    echo('Uyy que lastima, ya te acasbaste, perooo ahora te toca tu apoyo'); 
}

print '<h2>Switch</h2>'; 

/**
 * Recomiendo especificar de manera correcta las condiciones utilizadas por que puede caer en una que no queremos, 
 * lo que probocaria la finalizacion del switch y no cumplir con lo deseado.
 */

switch ($edad) {
    case $edad < 18:
        echo('Aun no puedes obtener tu Identificación oficial'); 
        break;

    case $edad >= 18 && $edad < 60:
        echo('Felicidades ya eres mayor de edad'); 
        break;

    case $edad >= 60 && $edad < 100:
        echo('Eres acredor a un apoyo monetario por parte del gobierno'); 
        break;

    case $edad > 100:
        echo('Por que sigues vivo?'); 
        break;
    
    default:
        echo('Error Desconocido'); 
        break;
}

print '<h2>For</h2>'; 

for ($i=1; $i <= 10; $i++) { 
    for ($j=1; $j <= 10 ; $j++) { 
        echo($i . ' x ' . $j . ' = ' . ($i * $j)); echo "<br>"; 
    }
    echo "<br>"; 
}