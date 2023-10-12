<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula11-funcoes</title>
    </head>
    <body>
        <br>
        <?php
            function calcula($valor){
                return $valor + 2;   
            }

            function retornaInformacaoValor($valor) {
                echo "A informação é $valor";
            }

            $array1 = [10,20,30,40,50,60,10,20,2,110,40,20,120,9,1000];
            $testar = true;
            
            foreach ($array1 as $elemento) {
                $retorno = calcula($elemento);
                //print_r($retorno);
                retornaInformacaoValor($retorno);
                echo "<br>";
            }
        ?>
    </body>
</html>