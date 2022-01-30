<?php

//Variable url, para poder consumir la informacion. (Esta url la obtuvimos de dailymotion)
$url = "https://api.dailymotion.com/videos?channel=news&limit=20"; 

/**
 * Como el url contiene la el certificado SSL es necesario especificar la parte de seguridad por eso especificamos las 
 * siguientes opciones. 
 * 
 * creamos un array con esas opciones para poder consumir esos datos 
 * (Esto se encuentra en la documentacion),  despues colocamos otro array dentro, el cual tendra las opciones
 * verify_peer que nos permite activar o desactivar este tipo de solicitudes, de esta forma podemos 
 * desactivar la compatibilidad y poder leer los datos. 
 * 
 */

$opciones=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false)); 

/*
 * Esta funcion nos permite convertir leer todo lo obtenido y obtener un string y posteriormente convertir 
 * los datos en una serie de objetos y arrays para poder manipular la informacion. 
 * 
 * como primer valor nos pide la url para obtener la informacion
 * despues nos pide una booleanos, para especificar si vamos a incluir informacion. 
 * finalmente la funcion stream que nos permite utilizar las opciones de desactivado de la lectura en los pamentros de configuracion. 
 * Basicamente nos permite desactivas las configuraciones del https y poder leer la informacion. 
 */

$respuesta = file_get_contents($url, false, stream_context_create($opciones)); 

//Decoficamos el json para obtener el arreglo
$objRespuesta = json_decode($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <ol>
        <?php
        /**
         * Cabe mencionar que lo que obtenemos de $objRespuesta es un arreglo, 
         * si lo analizamos con detemiento, dentro de este arreglo se encuentra otro, 
         * y ese arreglo es el que nosotros queremos leer, es por eso que especificamos 
         * de la siguiente forma el foreach, por que estamos accediendo al arreglo de 
         * adentro del otro arreglo. 
         */
            foreach ($objRespuesta->list as $itemList) {
                echo "<li>".$itemList->title."<br> - ".$itemList->channel."<br><br>"."</li>"; 
            }  
        ?>
    </ol>
    <br>
    <br>
    <br>
    <!-- PHP embebido (forma del curso) -->
    <ul>
        <?php  foreach ($objRespuesta->list as $itemList) { ?>
                <li>
                    <?php echo $itemList->title ?> <br>
                    - <?php echo $itemList->channel ?> <br><br>
                </li>
        <?php    }  ?>
    </ul>

</body>
</html>