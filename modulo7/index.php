<?php

include 'funcoes/funcoes.php';
include 'model.php';
include 'controller.php';

function rota($rota, $f) {
	$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	if ($path == $rota) {
		$f();
		exit();
	}
}

rota("/introducao-php/modulo7/", function() {
	echo "Página inicial";
});
rota("/introducao-php/modulo7/clientes", function() { 
	clientes();
});
rota("/introducao-php/modulo7/produtos", function() { 
	produtos();
});

echo "Página não encontrada<br>" . $_SERVER['REQUEST_URI'];
