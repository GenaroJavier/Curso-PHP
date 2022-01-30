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
        require 'index2.php'; 

        /**
         * La principal diferencia entre el include y el require, 
         * radica en el manejo de tipo de errores. 
         * 
         * Por ejemplo con el include, tenemos 5 lineas de codigo y tenemos un error en la linea 2, 
         * al ejecutarse, nos mostraria el error de la linea 2, y seguiria con la ejecucion de 
         * las 3 linas siguientes.
         * 
         * A diferencia del require, si nos encontrasemos en la misma situacion, al ejecutar la linea 2 
         * de codigo y notificar el error, se omitirian las 3 lineas siguientes y hasta que se 
         * solucionase el error. 
         */
    ?>
</body>
</html>
