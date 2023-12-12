<?php

function recebePar($par){
	return $_GET[$par];
}

function existePar($par) {
	return isset($_GET[$par]);
}

function testePar($par,$valor) {
	if ( !existePar($par) ) return false;
	return recebePar($par) == $valor;
}

include './model.php';

$id = "";
$nome = "";
$nota = "";
$acao = "Cadastrar";

if ( testePar('acao','Cadastrar') ) {
	insereDados( recebePar('nome'), recebePar('nota') ); // insere dados
} else if ( testePar('acao','Remover') ) {
	removeDados( recebePar('id') ); // remove dados
} else if ( testePar('acao','Editar') ) {
	editaDados( recebePar('id'), recebePar('nome'), recebePar('nota') ); // editar dados
} else if ( testePar('acao','Alterar') ){
	$dados = obterDadosId( recebePar('id') ); // exibir dados
	$id = $dados[0]['id'];
	$nome = $dados[0]['nome'];
	$nota = $dados[0]['nota'];
	$acao = "Editar";
}

$arrayCadastro = obterDados();

include './view.php';