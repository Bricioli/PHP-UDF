<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio-aula3-4.php" method="GET">
            <label> Digite um Numero de 1 a 12</label>
            <input type="number" name="a">
            <button type="submit">Enviar</button>
    </form>
    <?php
        $num = $_GET["a"];

        switch ($num){
            case 1: 
                $mes = "Janeiro";
                break;
             case 2: 
                $mes = "Fevereiro";
                break;
             case 3: 
                $mes = "Março";
                break;
             case 4: 
                $mes = "Abril";
                break;
             case 5: 
                $mes = "Maio";
                break;
             case 6: 
                $mes = "Junho";
                break;
             case 7: 
                $mes = "Julho";
                break;
             case 8: 
                $mes = "Agosto";
                break;
             case 9: 
                $mes = "Setembro";
                break;
             case 10: 
                $mes = "Outubro";
                break;
             case 11: 
                $mes = "Novembro";
                break;
             case 12: 
                $mes = "Dezembro";
                break;
            default:
                $mes = "Digite um numero de 1 a 12";     
        }
        if ($num <= 12){
            print "O numero ".$num." corresponde ao mês de ".$mes;
        }else{
            print $mes;
        }
    ?>  
</body>
</html>