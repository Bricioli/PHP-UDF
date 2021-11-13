<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 aula 4</title>
</head>
<body>
<form action="exercicio-aula4-1.php" method="POST"> 
        <label> Primeiro número: </label>
        <input type="number" name="a">
        <label> Segundo número </label>
        <input type="number" name="b">>
        <button type="submit">Enviar</button>
    </form>
    <?php 

    $num1 = $_POST["a"];
    $num2 = $_POST["b"];
    $soma = $num1 + $num2;

    if ($soma > 20){
        $soma = $soma + 8;
    }else{
        $soma = $soma - 5;
    }
    print "O valor é: ".$soma; 

    ?>
</body>
</html>