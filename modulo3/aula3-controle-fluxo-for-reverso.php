<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula1-controle-fluxo-for-reverso</title>
    </head>
    <body>
        <?php
            // exibir dados de um array de forma reversa (de trás para frente)
            $array1 = [10,20,30,40,50,60];
            
            for ($i=count($array1)-1; $i>=0; $i--) { 
                echo "No índice $i o valor do array array1 é $array1[$i]";
                echo "<br>";
            }
            echo "<hr>";
            // exibir os dados do array pulando de 2 em 2
            for ($i=count($array1)-1; $i>=0; $i-=2) { 
                echo "No índice $i o valor do array array1 é $array1[$i]";
                echo "<br>";
            }
        ?>
    </body>
</html>