<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula4-array1</title>
    </head>
    <body>

        <?php
        	$array1 = [1,2,3,4,5];
            print_r($array1);
            echo "<br>";

            foreach ($array1 as $elemento) {
                print_r($elemento);
                echo "<br>";
            }

            $array2 = ["olá", "mundo", "cruel"];
            print_r($array2);
            echo "<br>";
            $array3 = ["nome" => "Rudinei", "nota" => 10, "Situação" => "Aprovado"];
            print_r($array3);
            echo "<br>";
            $nome = $array3["nome"];
            echo "($nome)";

            echo "<br><br>";

            $arrayCadastro1 = ["nome" => "Rudinei", "nota" => 10, "Situação" => "Aprovado"];
            $arrayCadastro2 = ["nome" => "João", "nota" => 9, "Situação" => "Aprovado"];
            $arrayCadastro3 = ["nome" => "Maria", "nota" => 8, "Situação" => "Aprovado"];

            $cadastro = [$arrayCadastro1, $arrayCadastro2, $arrayCadastro3];
            print_r($cadastro);

            echo "<br><br>";

            echo "<ol>";
            foreach ($cadastro as $elemento) {
                echo "<li>";
                echo $elemento["nome"];
                echo " - ";
                echo $elemento["nota"];
                echo "</li>";
            }
            echo "</ol>";
        ?>

    </body>
</html>