<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 aula 03</title>
</head>
    <body>
        <form action="exercicio-aula3-1.php" method="GET">
            <label> Primeiro Numero </label>
            <input type="number" name="a">
            <Select name="operador">
                <option value="1"> + </option>
                <option value="2"> - </option>
                <option value="3"> * </option>
                <option value="4"> / </option>
            </Select>
            <label> Segundo Numero </label>
            <input type="number" name="b">
            
            <button>Enviar</button>
        </form>

        <?php 
            $num1 = @$_REQUEST["a"];
            $num2 = @$_REQUEST["b"];

            if ($_REQUEST["operador"] == "1"){
                print "A soma entre os números é: ".$num1+$num2; 
            }elseif ($_REQUEST["operador"] == "2"){
                print "A subtração entre os números é: ".$num1-$num2;
            }elseif ($_REQUEST["operador"] == "3"){
                print "A multiplicação entre os números é: ".$num1*$num2;
            }elseif ($_REQUEST["operador"] == "4"){
                print "A divisão entre os números é: ".$num1/$num2;
            }
        ?>
    </body>
</html>