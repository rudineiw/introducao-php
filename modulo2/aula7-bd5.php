<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula7-bd5</title>
    </head>
    <body>

        <form action="">
            Nome: <input name="nome">
            <br>
            Nota: <input name="nota">
            <br>
            <button>Cadastrar</button>
        </form>

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
            if(isset($_GET["nome"])){

                $nome = $_GET["nome"];
                $nota = $_GET["nota"];

                $sql = "INSERT INTO notas (nome,nota) VALUES (:nome,:nota)";
                $consulta = $conexao->prepare($sql);
                $consulta->bindParam(":nome",$nome);
                $consulta->bindParam(":nota",$nota);
                $consulta->execute();

            }



            // seleção de dados na tabela notas
        	$sql = "SELECT id,nome,nota FROM notas";
        	$consulta = $conexao->prepare($sql);
        	$consulta->execute();
        	// capturar os resultados da consulta
        	$resultados = $consulta->fetchALL(PDO::FETCH_ASSOC);
        	// exibir o resultado da consulta
        	//print_r($resultados);

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