<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula9-2-saída</title>
    </head>
    <body>

        <p><a href="aula9-2-entrada.php">Entrar novamente com dados</a></p>

        <?php 
            // operadores aritméticos 
            // + - * /
            $temperatura = $_GET["temperatura"];
            $fahrenheit = ( $temperatura * (9/5) ) + 32;

            echo "<p>$temperatura °C corresponde a $fahrenheit °F</p>";
        ?>

    </body>
</html>