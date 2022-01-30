<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio web</title>
</head>
<body>
    <?php
    /**
     * Al ejecutar el siguiente fragmento: 
     * 
     * require 'index2.php'; 
     * require 'index2.php'; 
     * 
     * Nos mostraria dos veces el mismo codigo y es por esto que se utiliza el 
     * require_once y include_once
     * 
     * basicamente funciona de la misma forma tanto para require como para include. 
     */

     require_once "index2.php";
     require_once "index2.php";

    ?>
</body>
</html>
