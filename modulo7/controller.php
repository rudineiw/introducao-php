<?php

function clientes() {
	$model = new Model();

	if (recebePar('acao') == 'Cadastrar'){
		$dadosCliente = $model->cadastrarCliente(recebePar('nome'),recebePar('email'));
	} else if ( testePar('acao','Remover') ) {
		$dadosCliente = $model->removerCliente(recebePar('id')); // remove dados
	} else if ( testePar('acao','Editar') ) {
		$dadosCliente = $model->editarCliente(recebePar('id'), recebePar('nome'), recebePar('email') ); // editar dados
	} else if ( testePar('acao','Alterar') ){
		$dadosCliente = $model->dadosCliente(recebePar('id')); // exibir dados
	} else {
		$dadosCliente = '';
	}

	$dados = $model->listarClientes();

	renderCliente('cliente.php', $dados, $dadosCliente);
}

function produtos() {
	$model = new Model();
	
	if (recebePar('acao') == 'Cadastrar'){
		$dadosProduto = $model->cadastrarProduto(recebePar('nome'),recebePar('valor'));
	} else if ( testePar('acao','Remover') ) {
		$dadosProduto = $model->removerProduto(recebePar('id')); // remove dados
	} else if ( testePar('acao','Editar') ) {
		$dadosProduto = $model->editarProduto(recebePar('id'), recebePar('nome'), recebePar('valor') ); // editar dados
	} else if ( testePar('acao','Alterar') ){
		$dadosProduto = $model->dadosProduto(recebePar('id')); // exibir dados
	} else {
		$dadosProduto = '';
	}

	$dados = $model->listarProdutos();

	renderProduto('produto.php', $dados, $dadosProduto);
}

function renderCliente($template, $dados, $dadosCliente) {
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

function renderProduto($template, $dados, $dadosProduto) {
	$arrayCadastro = $dados;
	
	if (!empty($dadosProduto)) {
		$id = $dadosProduto[0]['id'];
		$nome = $dadosProduto[0]['nome'];
		$valor = $dadosProduto[0]['valor'];
		$acao = "Editar";
	} else {
		$id = '';
		$nome = '';
		$valor = '';
		$acao = 'Cadastrar';
	}
	
	include $template;
}