<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 aula 3 de PHP</title>
</head>
<body>
<h1>Digite Notas de 1 a 10</h1>
<form action="exercicio-aula3-5.php" method="POST"> 
        <label> Primeira nota: </label>
        <input type="number" name="a">
        <label> Segunda nota </label>
        <input type="number" name="b">
        <label> Terceira nota</label>
        <input type="number" name="c">
        <label> Quarta nota </label>
        <input type="number" name="d">
        <button type="submit">Enviar</button>
    </form>  
    <?php 
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];
        $media = ($a+$b+$c+$d)/4;
        if ($media <=1){
            print "A média das 4 notas foi : ".$media." Então o aluno foi reprovado";
        }elseif($media > 1 and $media < 6){
            print "A média das 4 notas foi : ".$media." Então o aluno está de recuperação";
        }elseif($media >= 6 and $media <= 10){
            print "A média das 4 notas foi : ".$media." Então o aluno foi Aprovado!";
        }else{
            print "Nota Invalida";
        }
    ?>
</body>
</html>