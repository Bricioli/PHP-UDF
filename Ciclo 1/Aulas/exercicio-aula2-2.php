<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 da Aula 2 de PHP</title>
</head>
<body>
    <form action="exercicio-aula2-2.php" method="POST">
		<label>Me xingue! </label>
		<input type="String" name="frase">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
<?php
   print ("<h1>Exercicio 4</h1>");
   $frase = $_POST["frase"];
   $lista = array ("puta", "caralho", "foda", "PQP", "pqp", "porra");
   $frase = str_replace($lista, "*******", $frase);
   echo $frase;
?>