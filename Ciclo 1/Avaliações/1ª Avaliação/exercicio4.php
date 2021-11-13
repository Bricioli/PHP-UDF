<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eai, é bissexto?!</title>
</head>
<body>
    <form action="exercicio4.php" method="GET">
        <label>Digite um ano: </label>
        <input type="number" name="ano">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    /* Faça um script em PHP que peça um número correspondente a um determinado ano e em seguida informe se este ano é ou não bissexto. */
        $ano = @$_GET["ano"];
 
        if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0){
            print "O ano de ".$ano." é bissexto.";
        } else {
            print "O ano de ".$ano." não é bissexto.";
        }
    
    ?>
</body>
</html>