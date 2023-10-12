<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula3-bd2</title>
    </head>
    <body>

        <?php
        	// variáveis para conexão ao banco de dados
        	$host = "localhost";
        	$usuario = "root";
        	$senha = "";
        	$banco = "aulaphp";
        	$porta = 3306;
        	// conexão ao banco de dados
        	$conexao = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);
        	// seleção de dados na tabela notas
        	$sql = "SELECT id,nome,nota FROM notas";
        	$consulta = $conexao->prepare($sql);
        	$consulta->execute();
        	// capturar os resultados da consulta
        	$resultados = $consulta->fetchALL(PDO::FETCH_ASSOC);
        	// exibir o resultado da consulta
        	print_r($resultados);
            
            echo "<br><b>(print_r do resultado[0])</b><br>";
            print_r($resultados[0]);
            
            echo "<br><b>(print_r do resultado[1])</b><br>";
            print_r($resultados[1]);
            
            echo "<br><b>(print_r do resultado[2])</b><br>";
            print_r($resultados[2]);
            
            echo "<br><br><br>";

            print_r($resultados[0]["nome"]);
        ?>

    </body>
</html>