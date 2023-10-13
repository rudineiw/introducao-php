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
        	//print_r($resultados);
            echo "<ul>";

            echo "<li>";
            print_r($resultados[0]["nome"]);
            echo " - ";
            print_r($resultados[0]["nota"]);
            echo "</li>";

            echo "<li>";
            print_r($resultados[1]["nome"]);
            echo " - ";
            print_r($resultados[1]["nota"]);
            echo "</li>";

            echo "<li>";
            print_r($resultados[2]["nome"]);
            echo " - ";
            print_r($resultados[2]["nota"]);
            echo "</li>";
            
            echo "</ul>";
        ?>

    </body>
</html>