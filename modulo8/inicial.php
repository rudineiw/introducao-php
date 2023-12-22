<?php

session_start();
$idUsuario = $_SESSION['idusuario'];

if (!($idUsuario > 0)) {
	header("Location: login.php");
} else {
	echo "Você está logado como $idUsuario <br><br>";
}


echo '<a href="insere.php">Cadastrar usuários</a>';