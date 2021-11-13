<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 aula 4 de PHP</title>
</head>
<body>
    <form action="exercicio-aula3-3.php" method="GET">
        <label>Digite uma letra: </label>
        <input type="text" name="a">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $letra = $_GET["a"];
        $letra = strtolower($letra);
        switch ($letra) {
            case "a" :
                $teste = "Esta letra é uma vogal";
                break;
            case "e" :
                $teste = "Esta letra é uma vogal";
                break;
            case "i" :
                $teste = "Esta letra é uma vogal";
                break;
            case "o" :
                $teste = "Esta letra é uma vogal";            
                break;
            case "u" :
                $teste = "Esta letra é uma vogal";
                break;
            default :
                $teste = "Esta letra é uma consoante";
                break; 
        }
        print $teste;
    ?>
</body>
</html>