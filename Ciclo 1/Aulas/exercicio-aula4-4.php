<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 aula 4</title>
</head>
<body>
    <form action="exercicio-aula4-4.php" method="GET">
        <label> Primeiro numero: </label>
        <input type="number" name="a">
        <label> Segundo numero: </label>
        <input type="number" name="b">
        <label> Terceiro numero: </label>
        <input type="number" name="c">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $a = @$_REQUEST["a"];
        $b = @$_REQUEST["b"];
        $c = @$_REQUEST["c"];
        $resutado = ($a - $b)*$c;

        print "A expressão (". $a." - ".$b. ") * ".$c. " é igual a: ". $resutado;
    ?>
</body>
</html>