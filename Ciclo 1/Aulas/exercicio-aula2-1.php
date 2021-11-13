<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1, aula 2 de PHP</title>
</head>
<body>
    <form action="exercicio-aula2-1.php" method="GET">
		<label>Nome Completo: </label>
		<input type="String" name="nome">
		<label>Ano de nascimento: </label>
		<input type="number" name="nasc">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
<?php
print ("<h1>Exercicio 1</h1>");
    $senha = $_GET["nome"].$_GET["nasc"];
    print ("Senha aleatória com base em: ".$senha);
    print "<br>";
    $senha = str_replace(" ", "", $senha);
    $senha = str_shuffle($senha);
    $senha = substr($senha, 0, 10);
   	print ("A sua senha é: ".$senha);
?>