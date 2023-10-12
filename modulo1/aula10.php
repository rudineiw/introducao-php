<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula10-somente-1-arquivo</title>
    </head>
    <body>

        <h1>Converter Celsius em Fahrenheit</h1>

        <p>Entre com a temperatura em Celsius:</p>

        <form action="">
            Graus Celsius: <input name="temperatura">
            <br>
            <button>Converter</button>
        </form>

        <?php 
        if( isset($_GET['temperatura']) ) {
            $temperatura = $_GET["temperatura"];
            $fahrenheit = ( $temperatura * (9/5) ) + 32;

            echo "<p>$temperatura °C corresponde a $fahrenheit °F</p>";
            if($temperatura <= 15) {
                echo "<p>Está frio!</p>";
            } else if ($temperatura < 30) {
                echo "<p>Não está frio nem quente!</p>";
            } else {
                echo "<p>Está quente!</p>";
            }
        }
        ?>

    </body>
</html>