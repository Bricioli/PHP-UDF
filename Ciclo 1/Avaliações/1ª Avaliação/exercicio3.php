<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Aluno</title>
</head>
<body>
<h1>Digite Notas de 1 a 10</h1>
<form action="exercicio3.php" method="POST"> 
        <label> Primeira nota: </label>
        <input type="number" name="a">
        <label> Segunda nota </label>
        <input type="number" name="b">
        <button type="submit">Enviar</button>
    </form>  
    <?php 

    /*10. Faça uma página Web que pede duas notas de um aluno. Em seguida ele deve calcular a média do aluno e dar o seguinte resultado:
    A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
    A mensagem "Reprovado", se a média for menor do que seis;
    A mensagem "Aprovado com Distinção", se a média for igual a dez. */

        $n1 = @$_POST["a"];
        $n2 = @$_POST["b"];
        $media = ($n1+$n2)/2;
        if ($media < 6){
            print "A média das notas foi : ".$media." Então o aluno foi reprovado.";
        }elseif($media >= 6 and $media < 10){
            print "A média das notas foi : ".$media." Então o aluno foi aprovado.";
        }elseif($media >= 10){
            print "A média das notas foi : ".$media." Então o aluno foi Aprovado com Distinção!";
        }else{
            print "Nota Invalida";
        }
    ?>
</body>
</html>