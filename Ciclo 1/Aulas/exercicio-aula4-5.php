<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 aula 4</title>
</head>
<body>
    <form action="exercicio-aula4-5.php" method="
    GET">
        <h1>Quanto gastarei de combustivel?</h1>
        <label>Distância em KM: </label>
        <input type="number" name="a">
        <label>Consumo do carro em KM por litro: </label>
        <input type="number" name="b">
        <label> Preço da Gasolina: </label>
        <input type="number" name="c">
        <button type="submit">Enviar</button>
    </form>
    <?php 
        $km = @$_REQUEST["a"];
        $consumo = @$_REQUEST["b"];
        $preco = @$_REQUEST["c"];
        $litros = @$km / $consumo;
        $gasto = @$litros * $preco;
        

        print "Você gastará ".$litros = number_format($litros, 2). " litros de gasolina <br>";
        print "Assim o valor total gasto será de R$".$gasto= number_format($gasto, 2);
    ?>
</body>
</html>