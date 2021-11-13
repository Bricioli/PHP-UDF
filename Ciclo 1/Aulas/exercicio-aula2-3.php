<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apredendo PHP</title>
</head>
<body>
    <form action="exercicio-aula2-3.php" method="POST">
		<label>Nome: </label>
		<input type="string" name="nome">
		<label>Ano de nascimento: </label>
		<input type="number" name="nasc"> 
		<button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
  // Iformar meu nome e quantos anos tenho    
  print ("<h1>Exercicio 1</h2>");
  $nome = $_POST ["nome"];
  $ano_nasc = $_POST["nasc"];   
  $ano_atual = date("Y");
  $anos = $ano_atual - $ano_nasc;
  print ("Meu nome é ".$nome. " e tenho ".$anos. " anos.");
?>