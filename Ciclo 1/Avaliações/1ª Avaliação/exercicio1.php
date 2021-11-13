<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora imposto de renda</title>
</head>
<body>
    <h1>Calculo de imposto de renda</h1>
    <form action="exercicio1.php" method="GET">
        <label>Digite seu salário: </label>
        <input type="number" name="a">
        <button type="submit">Calcular</button>
    </form>
    <?php 
    /* Criar uma função para calcular o imposto de renda dos contribuintes. O sistema receberá o salário dos contribuinte e deverá acrescentar e deverá apresentar o valor do imposto de acordo com a tabela abaixo:  
            Renda Líquida        Alíquota
            Até 1 salários mínimos - Isento
            2 salários mínimos - 5%
            3 salários mínimos - 10%
            4 salários mínimos - 20%
            Acima de 5 salários mínimos - 25% 
    */
    $salario = @$_REQUEST["a"];
    $minimo = 1100.00;
    if ($salario >= $minimo*5){
        $contribuicao = $salario * 0.25;  
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >=  $minimo*4 && $salario <  $minimo*5){
        $contribuicao = $salario * 0.20;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >=  $minimo*3 && $salario <  $minimo*4){
        $contribuicao = $salario * 0.10;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >=  $minimo*2 && $salario < $minimo*3){
        $contribuicao = $salario * 0.05;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else{
        print "Você é isento de contribuição.";
    }
    ?>  
</body>
</html>
