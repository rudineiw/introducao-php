<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula6-saída</title>
    </head>
    <body>

        <p><a href="aula6-entrada.php">Entrar novamente com dados</a></p>

        <?php 
            $item1 = $_GET["item1"];
            $item2 = $_GET["item2"];
            $item3 = $_GET["item3"];
            
            echo "<ul><li>$item1</li><li>$item2</li><li>$item3</li></ul>";
        ?>

    </body>
</html>