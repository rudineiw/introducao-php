<?php
function conexao() {
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulaphp";
	$porta = 3306;

	try {
		$pdo = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);	
	} catch (PDOException $e) {
		die("Erro ao estabelecer a conexão com o banco de dados: " . $e->getMessage());
	}

	return $pdo;
}