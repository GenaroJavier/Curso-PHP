<?php
if($_GET) {
    $nombre=$_GET['txtNombre']; 
    $apellidos=$_GET['txtApellidos'];
    echo "Hola! ".$apellidos." ".$nombre." que tengas un exelente dia."; 
}
?>