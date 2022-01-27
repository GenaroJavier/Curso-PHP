<?php 
    //Declaramos variables
    $nombre = ""; 
    //Preguntamos si se realizo un envio por el metodo post 
    if($_POST) {
        /***
         * Aqui tenemos una comparacion en la que verificamos por medio de la funcion isset si 
         * nuestr variable no esta vacia, de ser esto verdadero le asignamos el valor que tiene 
         * el txtNombre a nuetra variable, de ser falso se deja vacio. 
         */
        $nombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
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
    <?php  
    if($_POST) {?>
        Hola: <b><?php echo $nombre?></b>
    <?php } ?>

    <form action="index.php" method="post">
        <input type="text" name="txtNombre">
        <input type="submit" value="Enviar Información">
    </form>
</body>
</html>
