<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 aula 3 PHP</title>
</head>
<body>
    <form action="exercicio-aula3-2.php" method="GET">
        <label>Numero 1</label>
        <input type="number" name="a">
        <button>Enviar</button>
    </form>
    <?php
        $n1 = @$_REQUEST["a"];

        if($n1 % 2 == 0) {
            print "O numero ".$n1." é um numero par";
        }else{
            print "O numero ".$n1." é um numero impar";
        }
    ?>
</body>
</html>