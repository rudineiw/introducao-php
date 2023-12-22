<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
</head>
<body>
	<form method="post">
		E-mail <input type="text" name="email">
		<br>
		Senha <input type="password" name="senha">
		<br>
		<button>Entrar</button>
	</form>
	<br>
	<a href="recupera.php">Recuperar senha</a>


	<?php

	session_start();

	include 'bd.php';

	// teste@teste.com | 123456 | $2y$10$YUmlk7M3uUzOXr1uboJpuOhdY297DDW01gPjqoHPzajnV4wDKakwC
	// theodor@mail.com | teste123 | $2y$10$1vezhg7gxk7EPMD11Wt9m.2ySiPaUXSRSgFpb7aouJ3mgm1YRoNK2

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$pdo = conexao();
		$sql = "SELECT id,hash_senha FROM usuarios WHERE email = :email";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(':email', $email);
		$consulta->execute();

		if ($consulta->rowCount() > 0) {
			$resultado = $consulta->fetch();
			$idUsuario = $resultado['id'];
			$hash_senha = $resultado['hash_senha'];
			if (password_verify($senha, $hash_senha)) {
        		$_SESSION['idusuario'] = $idUsuario;
				header("Location: inicial.php");
    		} else {
    			echo "Senha incorreta!";
    		}
		} else {
			echo "E-mail incorreto!";
		}
	}
	?>
</body>
</html>