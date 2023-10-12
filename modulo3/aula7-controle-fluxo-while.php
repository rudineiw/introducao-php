<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula7-controle-fluxo-while</title>
    </head>
    <body>
        <?php
            // while repete até a condição ser atingida ou até ter a execução de um break
            $numero = 1;
            $limite = 100000;
            
            // Exemplo 1
            // while ($numero < $limite) {
            //     echo "$numero<br>";
            //     $numero = $numero * 2; // $numero *= 2;
            // }

            // Exemplo 2
            while ( true ) {
                echo "$numero<br>";
                $numero = $numero * 2; // $numero *= 2;
                if($numero >= $limite){
                    break;
                }
            }

        ?>
    </body>
</html>