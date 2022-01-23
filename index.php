<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\estilos.css">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="index.php" method="post" class="form">
        <input type="number" placeholder="Ingresa un numero" name="txtNum1">
        <input type="number" placeholder="Ingresa un numero" name="txtNum2">
        <input type="submit" value="Realizar operaciones">
    </form>
</body>
</html>


<?php
    if($_POST){
        $num1 = $_POST['txtNum1'];
        $num2 = $_POST['txtNum2'];
        echo "Suma: <br>".$num1." + ".$num2." = ".$num1+$num2."<br><br>"; 
        echo "Resta: <br>".$num1." - ".$num2." = ".$num1-$num2."<br><br>"; 
        echo "Multiplicación: <br>".$num1." * ".$num2." = ".$num1*$num2."<br><br>"; 
        echo "División: <br>".$num1." / ".$num2." = ".$num1/$num2."<br><br>"; 
        echo "Potencia: <br>".$num1." ** ".$num2." = ".$num1**$num2."<br><br>"; 
    }
?>