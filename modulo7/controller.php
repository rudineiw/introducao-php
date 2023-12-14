<?php

function clientes() {
	$model = new Model();

	if (recebePar('acao') == 'Cadastrar'){
		$dadosCliente = $model->incluirCliente(recebePar('nome'),recebePar('email'));
	} else if ( testePar('acao','Remover') ) {
		$dadosCliente = $model->removeCliente(recebePar('id')); // remove dados
	} else if ( testePar('acao','Editar') ) {
		$dadosCliente = $model->editarCliente(recebePar('id'), recebePar('nome'), recebePar('email') ); // editar dados
	} else if ( testePar('acao','Alterar') ){
		$dadosCliente = $model->dadosCliente(recebePar('id')); // exibir dados
	} else {
		$dadosCliente = '';
	}

	$dados = $model->listarClientes();

	render('cliente.php', $dados, $dadosCliente);
}

function produtos() {
	$model = new Model();
	
	if (recebePar('acao') == 'Cadastrar'){
		$model->incluirProduto(recebePar('nome'),recebePar('valor'));
	}

	$dados = $model->listarProdutos();

	render('produto.php', $dados);
}

function render($template, $dados, $dadosCliente) {
	$arrayCadastro = $dados;
	
	if (!empty($dadosCliente)) {
		$id = $dadosCliente[0]['id'];
		$nome = $dadosCliente[0]['nome'];
		$email = $dadosCliente[0]['email'];
		$acao = "Editar";
	} else {
		$id = '';
		$nome = '';
		$email = '';
		$acao = 'Cadastrar';
	}
	
	include $template;
}