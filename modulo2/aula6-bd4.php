<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula6-bd4</title>
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
        	

            // Inserir no banco de dados
            $nome = "Paulo";
            $nota = 7;

            $sql = "INSERT INTO notas (nome,nota) VALUES (:nome,:nota)";
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(":nome",$nome);
            $consulta->bindParam(":nota",$nota);
            $consulta->execute();




            // seleção de dados na tabela notas
        	$sql = "SELECT id,nome,nota FROM notas";
        	$consulta = $conexao->prepare($sql);
        	$consulta->execute();
        	// capturar os resultados da consulta
        	$resultados = $consulta->fetchALL(PDO::FETCH_ASSOC);
        	// exibir o resultado da consulta
        	//print_r($resultados);

            echo "<ul>";
            foreach($resultados as $cadastro){
                echo "<li>";
                echo $cadastro["nome"];
                echo " - ";
                echo $cadastro["nota"];
                echo "</li>";
            }
            echo "</ul>";

            echo "<br><br>";

            echo "<table border=1><tr><td>ID</td><td>Nome</td><td>Nota</td></tr>";
            foreach($resultados as $cadastro){
                $id = $cadastro["id"];
                $nome = $cadastro["nome"];
                $nota = $cadastro["nota"];
        ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$nome?></td>
                <td><?=$nota?></td>
            </tr>
        <?php
            }
            echo "</table>";
        ?>

    </body>
</html>