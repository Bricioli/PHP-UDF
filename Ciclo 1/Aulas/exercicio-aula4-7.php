<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7 aula 4 PHP</title>
</head>
<body>
    <form action="exercicio-aula4-7.php" method="$_GET">
        <label>Linhas</label>
        <input type="number" name="a">
        <label>Colunas </label>
        <input type="number" name="b">
        <label>Digite uma frase top</label>
        <input type="text" name="frase">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $linhas = @$_GET["a"];
        $colunas = @$_GET["b"]; 
        $frase = @$_GET["franse"];
        //$contlinha = 1;
        //$contcolunas = 1;
        echo '<table border = "1" >';
        for ($i=1; $i <= $linhas; $i++) { 
            print "<tr> linha ";
            for ($j=1; $j <= $colunas; $j++) { 
                print "<td>coluna " .$frase. "</td>";
            }
            print "</tr>";
        }

        /* while ($contlinha <= $linhas){
            print "<tr>";
            while ($contcolunas <= $colunas){
                print "<td>" .$frase. "</td>";
                $contcolunas ++;
            }
            echo "</tr>";
            $contlinha ++;
        }
        echo "</table>"; */
    ?>
</body>
</html>