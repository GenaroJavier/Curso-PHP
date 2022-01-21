<?php
/**
 * Con la validacion del if, estamos preguntando si nos han realizado un envio por 
 * el metodo post. De esta forma evitamos un error en el que el txtNombre no esta definido.
 */
    if($_POST){
        $nombre = $_POST['txtNombre']; //Recibe informacion del formulario
        echo "Hola mi estimado: ".$nombre; 
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>Nombre: </p>
        <input type="text" name="txtNombre" placeholder="Escribe tu nombre">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>