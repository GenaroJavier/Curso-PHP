<?php 
    //Declaramos variables
    $nombre = ""; 
    $rdgLenguaje = ""; 
    //Preguntamos si se realizo un envio por el metodo post 
    if($_POST) {
        /***
         * Aqui tenemos una comparacion en la que verificamos por medio de la funcion isset si 
         * nuestr variable no esta vacia, de ser esto verdadero le asignamos el valor que tiene 
         * el txtNombre a nuetra variable, de ser falso se deja vacio. 
         */
        $nombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
        $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; 
        print_r("Mi lenguaje favorito es: <b>".$rdgLenguaje."</b>"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\estilos.css">
    <title>Document</title>
</head>
<body>
    <?php  
    if($_POST) {?>
        Hola: <b><?php echo $nombre?></b>
    <?php } ?>

    <form action="index.php" method="post">
    <br>
        <input type="text" name="txtNombre">
        <br>
        <br>
        <b>Lenguaje</b>
        <br>
        <!-- Para hacer uso radios es necesario que todos compartan el mismo nombre 
        ya que esto nos permite limitar la seleccion a una sola opcion-->
        PHP <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="php")?"checked":"";?> value="php">
        <br>
        HTML <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="html")?"checked":"";?> value="html">
        <br>
        CSS <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="css")?"checked":"";?> value="css">
        <br>
        <br>
        <input type="submit" value="Enviar Información">
    </form>
</body>
</html>
