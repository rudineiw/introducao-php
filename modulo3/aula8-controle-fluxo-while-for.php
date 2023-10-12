<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula8-controle-fluxo-while-for</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,50,60];
            $i=0;
            while( $i<count($array1) ) { 
                if($i == 3){
                    // não exibir nada
                } else {
                    echo "No índice $i o valor do array array1 é $array1[$i]";
                    echo "<br>";
                }
                $i++;
            }

        ?>
    </body>
</html>