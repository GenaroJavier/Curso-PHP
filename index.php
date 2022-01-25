<?php
    function numerosAleatorios() {
        return rand(1, 10)."<br>"; 
    }

    echo numerosAleatorios(); 
/**
 * Para conocer mas funciones se recomienda leer la documentacion oficial
 * https://www.php.net/manual/es/funcref.php
 */

    function separarFrase($texto) {
        $res = explode(",", $texto); 
        return $res[0]."<br>"; 
    }

    echo separarFrase("Anita, lava la tina");  


    function convertMayusculas($texto) {
        return strtoupper($texto)."<br>"; 
    }

    echo convertMayusculas("Anita lava la tina");
?>