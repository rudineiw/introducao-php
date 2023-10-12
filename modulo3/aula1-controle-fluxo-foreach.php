<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula1-controle-fluxo-foreach</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,50];
            //print_r($array1);
            echo "<br>";
            foreach ($array1 as $elemento) {
                print_r($elemento);
                echo "<br>";
            }
        ?>
    </body>
</html>