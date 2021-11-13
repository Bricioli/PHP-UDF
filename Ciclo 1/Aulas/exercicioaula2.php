<?php 
    // Iformar meu nome e quantos anos tenho    
    print ("<h1>Exercicio 1</h2>");
    $nome = "Jared de Brito Ricioli";
    $nasc = 1996;
    $date = date("Y");
    print ("Meu nome é ".$nome. " e tenho ".$date - $nasc. " anos.");
    print "<br>";
    //Gerando uma senha aletória com nome e ano de nascimento com 10 caracteres
    print ("<h1>Exercicio 2</h1>");
    $senha = $nome.$date;
    print ("Senha aleatória com base em: ".$senha);
    print "<br>";
    $senha = str_replace(" ", "", $senha);
    $senha = str_shuffle($senha);
    $senha = substr($senha, 0, 10);
    print ($senha);
    print "<br>";
    //Somar 3 numeros e dividir pelo ultimo
    echo ("<h1>Exercicio 3</h1>");
    $num1 = 10;
    $num2 = 15;
    $num3 = 5;
    $soma = $num1 + $num2 + $num3;
    print ("Os 3 números são: ".$num1.",".$num2." e ".$num3);
    print "<br>";
    print ("A soma dos 3 numeros é: ".$soma);
    print "<br>";
    print ("E a divisão deles pelo ultimo, que é ".$num3.", é : ".$soma / $num3);
    print "<br>";
    // identificar um palavrão e substituir por *****
    print ("<h1>Exercicio 4</h1>");
    $frase = "Seu filho da puta, corno do caralho";
    $lista = array ("puta", "caralho");
    $frase = str_replace($lista, "*******", $frase);
    echo $frase; 

?>