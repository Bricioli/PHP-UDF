<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5, aula 2 PHP</title>
</head>
<body>
    <form action="exercicio-aula2-5.php" method="POST"> 
        <label> Primeiro número: </label>
        <input type="number" name="a">
        <label> Segundo número </label>
        <input type="number" name="b">
        <button type="submit">Enviar</button>
    </form>   
</body>
</html>
<?php
    echo ("<h1> Exercicio 5</h1>");
    $num1 = $_POST["a"];
    $num2 = $_POST["b"];

    echo ($num1." + ".$num2." = ".$num1+$num2."<br>");
    echo ($num1." - ".$num2." = ".$num1-$num2."<br>");
    echo ($num1." x ".$num2." = ".$num1*$num2."<br>");
    echo ($num1." / ".$num2." = ".$num1/$num2."<br>");
?> 