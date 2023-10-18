<?php

// variáveis para conexão ao banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aulaphp";
$porta = 3306;

// conexão ao banco de dados
$conexao = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);

// consulta
$sql = "SELECT id,nome,nota FROM notas";
$consulta = $conexao->prepare($sql);
$consulta->execute();
$arrayCadastro = $consulta->fetchALL(PDO::FETCH_ASSOC);

include './template.php';