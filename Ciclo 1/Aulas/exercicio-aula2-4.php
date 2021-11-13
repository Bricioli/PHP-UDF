<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4, aula 2 de PHP</title>
</head>
<body>
    <form action="exercicio-aula2-4.php" method="GET">
		<label>Primeiro número</label>
		<input type="number" name="a">
		<br><label>Segundo número</label>
		<input type="number" name="b">
		<br><label>Terceiro número</label>
		<input type="number" name="c">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
<?php
	echo ("<h1>Exercicio 3</h1>");
	$num1 = $_GET["a"];
	$num2 = $_GET["b"];
	$num3 = $_GET["c"];
	$soma = $num1 + $num2 + $num3;
	print ("Os 3 números são: ".$num1.",".$num2." e ".$num3);
	print "<br>";
	print ("A soma dos 3 numeros é: ".$soma);
	print "<br>";
	print ("E a divisão deles pelo ultimo, que é ".$num3.", é : ".$soma / $num3);
?>