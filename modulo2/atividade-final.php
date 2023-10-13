<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>atividade-final</title>
    </head>
    <body>
        <p>Atividade final do módulo 2: criar uma nova tabela com mais campos e dados diferentes.</p>
        <p>Cursos</p>
        <form action="">
            Nome: <input name="nome">
            <br>
            Nível: <input name="nivel">
            <br>
            Qtd. Aulas: <input name="aulas">
            <br>
            Carga horária: <input name="horas">
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
                $nivel = $_GET["nivel"];
                $aulas = $_GET["aulas"];
                $horas = $_GET["horas"];

                $sql = "INSERT INTO cursos (nome,nivel,aulas,horas) VALUES (:nome,:nivel,:aulas,:horas)";
                $consulta = $conexao->prepare($sql);
                $consulta->bindParam(":nome",$nome);
                $consulta->bindParam(":nivel",$nivel);
                $consulta->bindParam(":aulas",$aulas);
                $consulta->bindParam(":horas",$horas);
                $consulta->execute();

            }

            // Excluir no banco de dados
            if(isset($_GET["acao"])){

                $id = $_GET["id"];

                $sql = "DELETE FROM cursos WHERE id = :id";
                $consulta = $conexao->prepare($sql);
                $consulta->bindParam(":id",$id);
                $consulta->execute();

            }

            // Seleção de dados na tabela cursos
        	$sql = "SELECT id,nome,nivel,aulas,horas FROM cursos";
        	$consulta = $conexao->prepare($sql);
        	$consulta->execute();
        	
            // capturar os resultados da consulta
        	$resultados = $consulta->fetchALL(PDO::FETCH_ASSOC);
        	
            // exibir o resultado da consulta
        	//print_r($resultados);
            echo "<table border=1><tr><th>ID</th><th>Nome</th><th>Nível</th><th>Aulas</th><th>Horas</th><th>Ação</th></tr>";
            foreach($resultados as $cadastro){
                $id = $cadastro["id"];
                $nome = $cadastro["nome"];
                $nivel = $cadastro["nivel"];
                $aulas = $cadastro["aulas"];
                $horas = $cadastro["horas"];
        ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$nome?></td>
                <td><?=$nivel?></td>
                <td><?=$aulas?></td>
                <td><?=$horas?></td>
                <td><a href="?acao=remover&id=<?=$id?>">Remover</a></td>
            </tr>
        <?php
            }
            echo "</table>";
        ?>

    </body>
</html>