<?php
    if($_POST) {
        move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']); 
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
   <!--
    Para adjuntar un archivo es necesario especificar la propiedad "enctype" que nos permite 
    adjuntar una imagen
   --> 
    <form action="index.php" method="post" enctype="multipart/form-data">

        Imagen: 
        <br>
        <!--- 
            El input file no le podemos asignar un tipo de dato, 
            el tipo file lo recibimos de una forma especial.       
            
            No le podemos un valor por default. 

            Podemos guardar cualquier tipo de archivo. 

            Para adjuntar un archivo es necesario especificar la propiedad "enctype" que nos permite 
            adjuntar una imagen
        -->
        <input type="file" name="archivo" id="">
        <br>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar informacion">

    </form>
</body>
</html>