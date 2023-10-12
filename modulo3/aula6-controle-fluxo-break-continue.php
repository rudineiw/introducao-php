<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula6-controle-fluxo-break-continue</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,-50,60];
            // continue e continue são usados dentro de for e foreach
            for ($i=0; $i<count($array1); $i++) { 
                if($i == 1){
                   continue; // se a condição for atendida ele pula e não executa o que vem logo abaixo
                }
                if($array1[$i] < 0){
                    break; // se a condição for atendida ele interrompre o loop
                }

                echo "No índice $i o valor do array array1 é $array1[$i]";
                echo "<br>";

            }
        ?>
    </body>
</html>