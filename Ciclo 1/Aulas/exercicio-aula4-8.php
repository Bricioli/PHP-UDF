<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8 aula 4</title>
</head>
<body>
    <h1>Calculo de imposto de renda</h1>
    <form action="exercicio-aula4-8.php" method="GET">
        <label>Digite seu salário: </label>
        <input type="number" name="a">
        <button type="submit">Calcular</button>
    </form>
    <?php 
    $salario = @$_REQUEST["a"];
    if ($salario >= 6600){
        $contribuicao = $salario * 0.27;  
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >= 5500 && $salario < 6600){
        $contribuicao = $salario * 0.22;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >= 4400 && $salario < 5500){
        $contribuicao = $salario * 0.15;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else if ($salario >= 3300 && $salario < 4400){
        $contribuicao = $salario * 0.07;   
        print "O valor da contribuição é :  R$".$contribuicao."<br>";
    }else{
        print "Você é isento de contribuição.";
    }
    ?>  
</body>
</html>




