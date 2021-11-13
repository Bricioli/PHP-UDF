<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 aula 4</title>
</head>
<body>
    <h1>Tabuada de um numero</h1>
    <form action="exercicio-aula4-3.php" method="GET">
        <label>Digite o número: </label>
        <input type="number" name="num">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $num = @$_REQUEST["num"];
    $mult = 1;
    while ($mult <= 10) {
        $tabu = $num * $mult;
        print $num. " X ". $mult." = ". $tabu."<br>";
        $mult++;
    }
    ?>
</body>
</html>