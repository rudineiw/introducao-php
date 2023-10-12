<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula9-1-saída</title>
    </head>
    <body>

        <p><a href="aula9-1-entrada.php">Entrar novamente com dados</a></p>

        <?php 
            // operadores aritméticos 
            // + - * /
            $km = $_GET["km"];
            $milha = $km * 0.621371;

            echo "<p>$km quilômetro corresponde a $milha milha</p>";
        ?>

    </body>
</html>