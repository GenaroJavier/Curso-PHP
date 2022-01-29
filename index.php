<?php 
/**
 * Estos ejercicios son un ejemplo de como obtener un dato y como devolverlo 
 * haciendo uso de los elementos de un formulario.
 */
    //Declaramos variables
    $nombre = ""; 
    $rdgLenguaje = ""; 
    $chkphp = ""; 
    $chkhtml = ""; 
    $chkcss = ""; 
    $optAnime = "";
    $Opinion = "";
    //Preguntamos si se realizo un envio por el metodo post 
    if($_POST) {

        /***
         * Aqui tenemos una comparacion en la que verificamos por medio de la funcion isset si 
         * nuestr variable no esta vacia, de ser esto verdadero le asignamos el valor que tiene 
         * el txtNombre a nuetra variable, de ser falso se deja vacio. 
         */
        $nombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
        $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; 

        //Valores checkbox 
        //El checked es para que se quede la palomita del checkbox 
        $chkphp = (isset($_POST['chkphp'])=="si")?"checked":""; 
        $chkhtml = (isset($_POST['chkhtml'])=="si")?"checked":""; 
        $chkcss = (isset($_POST['chkcss'])=="si")?"checked":""; 

        $optAnime = (isset(($_POST['selAnime']))?$_POST['selAnime']:"");
        $opinion = (isset($_POST['txtOpinion']))?$_POST['txtOpinion']:""; 
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
    //Nombre
    if($_POST) {?>
        Hola: <b><?php echo $nombre?></b>
        <br>
        <?php print_r("Mi lenguaje favorito es: <b>".$rdgLenguaje."</b>"); ?>
        <br>
        Estoy aprendiendo: 
        <?php
            echo ($chkphp=="checked")?"<b> PHP </b>":""; 
            echo ($chkhtml=="checked")?"<b> HTML </b>":""; 
            echo ($chkcss=="checked")?"<b> CSS </b>":""; 
        ?>
        <br>
        <?php print_r("Mi anime favorito es: <b>".$optAnime."</b>"); ?>
        <br>
        <?php print_r("Tu opinion fue: <b>".$opinion."</b>"); ?>
    <?php } ?>

    <form action="index.php" method="post">
    <br>
        <input type="text" name="txtNombre">
        <br>
        <br>
        <b>¿Cual es tu lenguaje favorito?</b>
        <br>
        <!-- Para hacer uso radios es necesario que todos compartan el mismo nombre 
        ya que esto nos permite limitar la seleccion a una sola opcion-->
        PHP <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="php")?"checked":"";?> value="PHP">
        <br>
        HTML <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="html")?"checked":"";?> value="HTML">
        <br>
        CSS <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="css")?"checked":"";?> value="CSS">
        <br>
        <br>
        <b>¿Que lenguaje estas aprendiendo?</b>
        <br>
        PHP
        <input type="checkbox" name="chkphp" id="" value="si" <?php echo $chkphp;?>>
        <br>
        HTML
        <input type="checkbox" name="chkhtml" id="" value="si" <?php echo $chkhtml;?>>
        <br>
        CSS
        <input type="checkbox" name="chkcss" id="" value="si" <?php echo $chkcss;?>>
        <br>
        <br>
        <b>¿Que anime te gusta?</b>
        <br>
        <br>
        <select name="selAnime" id="">
            <option value="One piece" <?php echo ($optAnime=="One piece")?"selected":""; ?>>One piece</option>
             <option value="Naruto" <?php echo ($optAnime=="Naruto")?"selected":""; ?>>Naruto</option>
            <option value="Dragon Ball" <?php echo ($optAnime=="Dragon Ball")?"selected":""; ?>>Dragon ball</option>
        </select>
        <br>
        <br>
        <b>Tu opinión es importante</b>
        <br>
        <textarea name="txtOpinion" id="" cols="30" rows="10"><?php echo $opinion?></textarea>
        <input type="submit" value="Enviar Información">
        <br>
        <br>
    </form>
</body>
</html>

