<?php
    $txt = "jared de brito ricioli";
    // contar letras em uma string
    echo strlen($txt);
    print "<br>";
    //contar as palavras em uma string
    echo str_word_count($txt);
    print "<br>";
    // retornar parte de uma string
    echo substr($txt, 0, 5);
    print "<br";
    //trazer uma string em maiusculo
    echo strtoupper($txt);
    print "<br>";
    //trazer uma string em minusculo
    echo strtolower($txt);
    print "<br>";
    //primeira letra da string maiuscula
    print ucfirst($txt);
    print "<br>";
    //todas primeiras letras da  string como maniuscula
    print ucwords($txt);
    print "<br>";
    //embaralhar strings
    print str_shuffle($txt);
    print "<br>";
    // trazer string reversa
    print strrev($txt);
    print "<br>";
    // substituir parte de uma string ou caractere
    print str_replace("de brito", "B.", $txt);
    print "<br>";
?>