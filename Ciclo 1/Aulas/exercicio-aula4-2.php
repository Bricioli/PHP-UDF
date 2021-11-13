<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 aula 4</title>
</head>
<body>
<form action="exercicio-aula4-2.php" method="POST"> 
        <label> Primeiro número: </label>
        <input type="number" name="a">
        <label> Segundo número </label>
        <input type="number" name="b">
        <label> Terceiro número: </label>
        <input type="number" name="c">
        <button type="submit">Enviar</button>
    </form>
    <?php 

    $num1 = $_POST["a"];
    $num2 = $_POST["b"];
    $num3 = $_POST["c"];
    
    if ($num1 > $num2 && $num1 > $num3){
        $maior = $num1;
    }elseif($num2 > $num1 && $num2 > $num3) {
        $maior = $num2;
    }else{
        $maior = $num3;
    }
    if ($num1 < $num2 && $num1 < $num3){
        $menor = $num1;
    }elseif($num2 < $num1 && $num2 < $num3) {
        $menor = $num2;
    }else{
        $menor = $num3;
    }
    print "O maior valor é: ".$maior."<br>"; 
    print "O menor valor é: ".$menor; 

    ?>
</body>
</html>