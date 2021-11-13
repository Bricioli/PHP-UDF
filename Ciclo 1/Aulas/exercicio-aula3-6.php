<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6 Aula 3 PHP</title>
</head>
<body>
<form action="exercicio-aula3-6.php" method="POST">
            <label>Valor da compra: R$ </label>
            <input type="number" name="a">
            <Select name="pgto">
                <option value="1"> Dinheiro a vista</option>
                <option value="2"> Débito a vista </option>
                <option value="3"> Crédito a vista </option>
                <option value="4"> Crédito parcelado </option>
            </Select>
            <button type="submit">Enviar</button>
    </form>
    <?php
        $valor = $_POST["a"];
        
        if ($_POST["pgto"] == "1"){
            print "O valor da compra é de: R$".$valor." e com  pagamento em dinheiro a vista, tem 10% de desconto, sendo assim fica R$".$valor-($valor*0.1); 
        }elseif ($_POST["pgto"] == "2"){
            print "O valor da compra é de: R$".$valor." e com o pagamento no débito a vista, tem 5% de desconto, sendo assim fica R$".$valor-($valor*0.05); 
        }elseif ($_POST["pgto"] == "3"){
            print "O valor da compra é de: R$".$valor." e com o pagamento no crédito a vista, tem o acrécimo de 5%, sendo assim fica R$".$valor+($valor*0.05);
        }elseif ($_POST["pgto"] == "4"){
            print "O valor da compra é de: R$".$valor." e com o pagamento no crédito parcelado, tem o acrécimo de 10%, sendo assim fica R$".$valor+($valor*0.1);
        }
     
    ?>
</body>
</html>
