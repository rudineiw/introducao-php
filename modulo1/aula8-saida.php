<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula8-saída</title>
    </head>
    <body>

        <p><a href="aula8-entrada.php">Entrar novamente com dados</a></p>

        <?php 
            // operadores aritméticos 
            // + - * /
            $numero1 = $_GET["numero1"];
            $numero2 = $_GET["numero2"];
            $soma = $numero1 + $numero2;

            echo "<p>A soma é $soma</p>";
        ?>

    </body>
</html>