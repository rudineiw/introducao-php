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

// insere dados
if ( existePar('nome') ) {
	insereDados( recebePar('nome'), recebePar('nota') );
}

// remove dados
if ( testePar('acao','remover') ){
	removeDados( recebePar('id') );
}

$arrayCadastro = obterDados();

include './view.php';