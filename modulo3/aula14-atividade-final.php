<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula14-atividade-final</title>
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
            // função conectar ao banco de dados
            function estabelecerConexao() {
                $host = "localhost";
                $usuario = "root";
                $senha = "";
                $banco = "aulaphp";
                $porta = 3306;
                return new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);
            }
            // função inserir na tabela notas
            function executaInsert() {
                $nome = $_GET["nome"];
                $nota = $_GET["nota"];
                $conexao = estabelecerConexao();
                $sql = "INSERT INTO notas (nome,nota) VALUES (:nome,:nota)";
                $consulta = $conexao->prepare($sql);
                $consulta->bindParam(":nome",$nome);
                $consulta->bindParam(":nota",$nota);
                $consulta->execute();
            }
            // função excluir da tabela notas
            function executaDelete() {
                $id = $_GET["id"];
                $conexao = estabelecerConexao();
                $sql = "DELETE FROM notas WHERE id = :id";
                $consulta = $conexao->prepare($sql);
                $consulta->bindParam(":id",$id);
                $consulta->execute();
            }
            // função exibir da tabela notas
            function exibeDados() {
                $conexao = estabelecerConexao();
                $sql = "SELECT id,nome,nota FROM notas";
                $consulta = $conexao->prepare($sql);
                $consulta->execute();
                $resultados = $consulta->fetchALL(PDO::FETCH_ASSOC);
                
                echo '        
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Nota</th>
                        <th>Ação</th>
                </tr>
                ';
                foreach($resultados as $cadastro){
                    echo '
                    <tr>
                        <td>'.$cadastro["id"].'</td>
                        <td>'.$cadastro["nome"].'</td>
                        <td>'.$cadastro["nota"].'</td>
                        <td><a href="?acao=remover&id='.$cadastro["id"].'">Remover</a></td>
                    </tr>
                    ';
                }
                echo '
                </table>
                ';
            }

            if(isset($_GET["nome"])){ 
                executaInsert(); // Chama função de inserir na tabela notas
            } 
            elseif(isset($_GET["acao"])){ 
                executaDelete(); // Chama função da excluir na tabela notas
            }
        
            exibeDados(); // Chama função de exibir dados da tabela notas
            ?>

    </body>
</html>