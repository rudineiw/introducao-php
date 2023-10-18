<?php

function estabelecerConexao() {
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulaphp";
	$porta = 3306;

	$conexao = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);

	return $conexao;
}

function obterDados() {
	$conexao = estabelecerConexao();

	$sql = "SELECT id,nome,nota FROM notas";
	$consulta = $conexao->prepare($sql);
	$consulta->execute();
	$dados = $consulta->fetchALL(PDO::FETCH_ASSOC);
	
	return $dados;
}

function insereDados($nome,$nota) {
	$conexao = estabelecerConexao();

	$sql = "INSERT INTO notas (nome,nota) VALUES (:nome,:nota)";
	$consulta = $conexao->prepare($sql);
	$consulta->bindParam(':nome',$nome);
	$consulta->bindParam(':nota',$nota);
	$consulta->execute();
}

function removeDados($id) {
	$conexao = estabelecerConexao();

	$sql = "DELETE FROM notas WHERE id = :id";
	$consulta = $conexao->prepare($sql);
	$consulta->bindParam(':id',$id);
	$consulta->execute();
}