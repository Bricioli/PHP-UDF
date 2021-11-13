<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
    <form action="q8.php" method="POST">
        <h1>Quanto você ja gastou com cigarros? </h1>
        <label>Quantos anos você fuma? </label>
        <input type="number" name="a">
        <label>Quantos cigarros por dia? </label>
        <input type="number" name="b">
        <label>Preço da Carteira de cigarros </label>
        <input type="number" name="c">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $anos = $_POST["a"];
        $cigarros = $_POST["b"];
        $preço = $_POST["c"];
        $unidade = $preço/20;
        $dias = $anos * 365;
        $gasto = $cigarros * $unidade * $dias;
        $total = $cigarros * $dias;
        
        print "Ao longo da sua vida vc já fumou ". $total. " cigarros, e ja gastou um total de R$".$gasto = number_format($gasto, 2). "<br> ";

        print "dias = ".$dias. "<br>";
        print "unidades = ".$unidade = number_format($unidade,2);
    ?>
</body>
</html>