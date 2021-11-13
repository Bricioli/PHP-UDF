<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de compras</title>
</head>
<body>
<form action="exercicio2.php" method="POST">
            <label>Valor da compra: R$ </label>
            <input type="number" name="a">
            <Select name="pgto">
                <option value="1"> Dinheiro a vista</option>
                <option value="2"> Cartão a vista </option>
                <option value="3"> Parcelado 2 vezes </option>
                <option value="4"> Parcelado 3 vezes </option>
            </Select>
            <button type="submit">Enviar</button>
    </form>
    <?php
    /* Elabore um programa, que calcule o que deve ser pago por um produto considerando 
    o preço normal de etiqueta e a escolha da condição de pagamento. 
    Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar 
    o cálculo adequado. [ Utilize o comando Switch] Cod 1 - A vista em dinheiro, recebe 10% de desconto; Cod 2 - à vista no cartão, recebe 5%; Cod 3 - Em 2 vezes, preço normal; Cod 4 - Em 3 vezes, preço normal mais 10% de juros.  */

        $valor = @$_POST["a"]; 
        
        switch (@$_POST["pgto"]) {
            case 1:
                $valorfinal = $valor-($valor*0.1); 
                break;
            case 2:
                $valorfinal = $valor-($valor*0.05); 
                break;
            case 3:
                $valorfinal = $valor;
                break;
            case 4:
                $valorfinal = $valor+($valor*0.1); 
                break;
        }
        print "Devido a forma de pagamento escolhida, o valor final é: R$". @$valorfinal;
    ?>
</body>
</html>