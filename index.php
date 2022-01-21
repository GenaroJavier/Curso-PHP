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
//Asignación
$num = 9;
$lang = [
    'es' => 'Español',
    'en' => 'ingles'
]; 

//Aritmética 
print '<h2>Aritmética</h2>'; 
echo "Suma 2 + 2 = " . ((int) 2 + (int) 2);
echo "<br>"; 
echo "Resta 2 - 2 = " . ((int) 2 - (int) 2); 
echo "<br>"; 
echo "Multiplicar 2 * 2 = " . ((int) 2 * (int) 2); 
echo "<br>"; 
echo "Divide 2 / 2 = " . ((int) 2 / (int) 2); 
echo "<br>"; 
echo "Modulo 2 % 2 = " . ((int) 2 % (int) 2); 
echo "<br>"; 
echo "Exponencial 2 ** 2 = " . ((int) 2 ** (int) 2); 
echo "<br>"; 
echo "<br>"; 

//Formas de realizar comparaciones 
print '<h2>Comparaciones</h2>'; 
// Igual ( == ) 
echo '9 == 9'; 
echo "<br>"; 
if (9 == 9) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

/**
 * Aqui podemos notar que al comparar un tipo 
 * de dato int con un string la comparación nos da verdadero
 */
echo "<br>"; 
echo "<br>"; 
echo '9 == "9"'; 
echo "<br>"; 
if (9 == '9') {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

/**
 * A diferencia de hacer la comparacion con el simbolo '==' estamos diciendo que unicamente compare el valor de las datos
 * si nosotros especificamos la comparacion con el simbolo '===' estamos diciendo que queremos que compare 
 * tanto el dato, como el tipo de dato, de no cumplirse uno de estas condiciones el resultado de la comparacion seria falso
 */
echo "<br>"; 
echo "<br>"; 
echo '9 === "9"'; 
echo "<br>"; 
if (9 === '9') {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

echo "<br>"; 
echo "<br>"; 
echo '9 != 8'; 
echo "<br>"; 
if (9 != 9) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

echo "<br>"; 
echo "<br>"; 
echo '9 > 8'; 
echo "<br>"; 
if (9 > 8) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

echo "<br>"; 
echo "<br>"; 
echo '9 >= 9'; 
echo "<br>"; 
if (9 >= 9) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

echo "<br>"; 
echo "<br>"; 
echo '9 < 8'; 
echo "<br>"; 
if (9 < 8) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

echo "<br>"; 
echo "<br>"; 
echo '9 <= 9'; 
echo "<br>"; 
if (9 <= 9) {
    echo 'Verdadero'; 
} else {
    echo 'Falso'; 
}

//Variables variables
echo "<br>"; 
print '<h2>Variables dinamicas</h2>'; 
/**
 *  El uso de variables dinamicas, nos brinda la oportunidad, como de referencias el valor de una variable 
 * con otra variable. vease a continuacion: 
 */

//Declaracion de variables. 
$nombre = 'Genaro'; 
//Vease que nombramos una variable con el mismo valor de la variable anterior. 
$Genaro = 'Estudiante'; 

//Imprimimos el valor de la variable $nombre

echo $nombre; 
/**
 * Aqui está lo interesante, como el dato de la variable nombre, comparte el mismo nombre que otra variable, nosotros 
 * podemos hacer referencia al valor de esta segunda variable usado dos veces el siguiente simbolo ($). 
 */
echo "<br>"; 
echo $$nombre; //Nos devuelve "Estudiante"

?> 
</body>
</html>

