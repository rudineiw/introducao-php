<?php
function recebePar($par) {
	if(existePar($par)) 
		return $_GET[$par];
	return "";
}

function existePar($par) {
	return isset($_GET[$par]);
}

function testePar($par,$valor) {
	if (!existePar($par)) return false;
	return recebePar($par) == $valor;
}