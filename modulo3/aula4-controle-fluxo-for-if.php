<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula4-controle-fluxo-for-if</title>
    </head>
    <body>
        <?php
            $array1 = [10,20,30,40,50,60];
            
            for ($i=0; $i<count($array1); $i++) { 
                echo "No índice $i o valor do array array1 é $array1[$i]";
                echo "<br>";
                if($i >= 3){
                    echo "o índice é maior ou igual a 3<br><br>";
                } else {
                    echo "o índice é menor que 3<br><br>";
                }
            }
        ?>
    </body>
</html>