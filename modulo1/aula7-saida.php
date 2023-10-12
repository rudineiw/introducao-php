<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula7-saída</title>
    </head>
    <body>

        <p><a href="aula7-entrada.php">Entrar novamente com dados</a></p>

        <?php 
            $nome = $_GET["nome"];
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $aprovado = $_GET["aprovado"];
        ?>

        <table border="1">
            <tr>
                <td><b>Nome</b></td>
                <td><b>Nota 1</b></td>
                <td><b>Nota 2</b></td>
                <td><b>Aprovado</b></td>
            </tr>
            <tr>
                <td><?=$nome?></td>
                <td><?=$nota1?></td>
                <td><?=$nota2?></td>
                <td><?=$aprovado?></td>
            </tr>
        </table>
    </body>
</html>