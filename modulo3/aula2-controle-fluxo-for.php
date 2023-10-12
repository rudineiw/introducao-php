<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula2-controle-fluxo-for</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,50,60];
            
            for ($i=0; $i<count($array1); $i++) { 
                echo "No índice $i o valor do array array1 é $array1[$i]";
                echo "<br>";
            }
            echo "<hr>";
            echo "O valor de count(array1) é: " . count($array1);
            // count retorna o número de elementos de um array.
            echo "<hr>";
            echo "O primeiro elemento do array é $array1[0]";
            echo "<br>";
            $ultimo = count($array1) - 1;
            echo "O último elemento do array é $array1[$ultimo]";
        ?>
    </body>
</html>