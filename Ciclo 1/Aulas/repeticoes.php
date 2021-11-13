<?php

    print "<h1>While </h1>";

    $i = 1;
    while ($i <= 10 ){
        print $i." ";
        $i++; //$i = $i+1
    }

    print "<h1>DoWile </h1>";

    $i = 1;
    do {
        print $i. " ";
        $i++;
    }while($i <= 10);

    print "<h1>For </h1>";  

    for ($i = 0; $i <= 10 ; $i++){
        print $i. " ";
    }

    print "<h1>Foreach </h1>";  
    $frutas = array("Abacaxi","Banana", "Carambola", "Damasco","Escarola","Framboeza");

    foreach ($frutas as $fruta){
        print $fruta."<br>";
    }

    print "<h1>Range </h1>"; 

    $alfabeto = range("A", "Z");

    foreach ($alfabeto as $letra) {
        print $letra. " ";
    }
?>