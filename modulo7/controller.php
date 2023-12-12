<?php

function clientes() {
	$model = new Model();

	if (recebePar("acao") == "Cadastrar"){
		$model->incluirCliente(recebePar("nome"),recebePar("email"));
	} else if ( testePar('acao','Remover') ) {
		$model->removeCliente(recebePar('id')); // remove dados
	} else if ( testePar('acao','Editar') ) {
		$model->editarCliente(recebePar('id'), recebePar('nome'), recebePar('email') ); // editar dados
	} else if ( testePar('acao','Alterar') ){
		$dados = $model->obterDadosCliente(recebePar('id')); // exibir dados
		$id = $dados[0]['id'];
		$nome = $dados[0]['nome'];
		$email = $dados[0]['email'];
		$acao = "Editar";
	}

	$dados = $model->listarClientes();

	render('cliente.php', $dados);
}

function produtos() {
	$model = new Model();
	
	if (recebePar("acao") == "Cadastrar"){
		$model->incluirProduto(recebePar("nome"),recebePar("valor"));
	}

	$dados = $model->listarProdutos();

	render('produto.php', $dados);
}

function render($template, $dados) {
	$arrayCadastro = $dados;
	include $template;
}