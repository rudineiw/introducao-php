<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula11-booleanos-and-not</title>
    </head>
    <body>
        <br>
        <?php
            $array1 = [10,20,30,40,50,60,10,20,2,110,40,20,120,9,1000];
            $testar = true;
            
            foreach ($array1 as $elemento) {
                print_r($elemento);
                if( ($testar) && ($elemento > 100) ){
                    echo " (primeira vez que passei de 100)";
                    $testar = false;
                }
                echo "<br>";
            }
        ?>
    </body>
</html>