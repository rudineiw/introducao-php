<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula3-teste-get</title>
    </head>
    <body>

        <h1>Teste Array $_GET</h1>

        <form action="">
            <input name="item1">
            <br>
            <input name="item2">
            <br>
            <input name="item3">
            <br>
            <button>Enviar</button>
        </form>

        <?php 
            print_r($_GET);
        ?>

    </body>
</html>