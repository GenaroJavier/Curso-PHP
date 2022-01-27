<?php 
    /**
     * Variables de sesion
     */

    //Esta funcion nos permite crear variables que podemos visualizar en todas las paginas. 
    //Es usado principalmente para los inicios de session. 
     session_start(); 

    $_SESSION["Usuario"]="Develoteca"; 
    $_SESSION["estatus"]="logueado"; 

    echo "Sesión Iniciada <br>";  
    echo "Usuario: ".$_SESSION["Usuario"]."<br> Estatus: ".$_SESSION["estatus"]; 

?>
