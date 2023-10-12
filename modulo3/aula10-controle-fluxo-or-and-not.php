<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula9-controle-fluxo-or</title>
    </head>
    <body>
        <br>
        <?php
            // || (OR)    
            // true || true     => true
            // true || false    => true
            // false || true    => true
            // false || false   => false

            $array1 = [10,20,30,40,50];
            $teste1 = 20;
            $teste2 = 40;
            // Exemplo usando || (OR)
            foreach ($array1 as $elemento) {
                print_r($elemento);
                if( ($elemento == $teste1) || $elemento == $teste2 ){
                    echo " (teste)";
                }
                echo "<br>";
            }
            echo "<hr>";
            // Exemplo usando && (AND)
            foreach ($array1 as $elemento) {
                print_r($elemento);
                if( ($elemento == $teste1) && $elemento == $teste2 ){
                    echo " (teste)";
                }
                echo "<br>";
            }
            echo "<hr>";
            // Exemplo usando ! (NOT)
            foreach ($array1 as $elemento) {
                print_r($elemento);
                if( !(($elemento == $teste1) && $elemento == $teste2) ){
                    echo " (teste)";
                }
                echo "<br>";
            }
            echo "<hr>";
        ?>
    </body>
</html>