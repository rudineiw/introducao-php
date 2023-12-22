<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insere</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
		E-mail <input type="text" name="email">
		<br>
		Senha <input type="password" name="senha">
		<br>
		<button>Cadastrar</button>
	</form>
	<?php

	session_start();
	$idUsuario = $_SESSION['idusuario'];
	if (!($idUsuario > 0)) {
		header("Location: login.php");
	}
	include 'bd.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$hashSenha = password_hash($senha,PASSWORD_DEFAULT);

		$pdo = conexao();
		$sql = "INSERT INTO usuarios (email, hash_senha) VALUES (:email, :hash_senha)";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(':email', $email);
		$consulta->bindParam(':hash_senha', $hashSenha);
		$consulta->execute();

		echo "Cadastrado com sucesso!";

	}
	?>
</body>
</html>