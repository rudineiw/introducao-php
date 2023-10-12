<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula13-funcoes-desafio</title>
    </head>
    <body>
        <br>
        <?php
            // Desafio funções
            // Criar uma função que soma dois parâmetros e retorna
            // Criar 2 arrays: array1 e array2
            // $array1 = [10,5,3,12];
            // $array2 = [7,3,4,20];
            // Percorra os arrays somando e gerando o resultado, chmando a função soma de 17,8,7,32

            function soma($n1, $n2){
                return $n1 + $n2;   
            }

            $array1 = [10,5,3,12];
            $array2 = [7,3,4,20];

            for($i = 0; $i < count($array1); $i++) {
                $soma = soma($array1[$i],$array2[$i]);
                echo $soma;
                if($i != count($array1)-1){
                    echo ",";
                }
            }
        ?>
    </body>
</html>