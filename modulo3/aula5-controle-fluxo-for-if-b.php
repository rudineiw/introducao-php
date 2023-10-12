<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula5-controle-fluxo-for-if-b</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,50,60];
            
            for ($i=0; $i<count($array1); $i++) { 
            // exibir apenas os elementos do array menos do índice = 3
                if($i != 3){
                    echo "No índice $i o valor do array array1 é $array1[$i]";
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>