<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recuperar senha</title>
</head>
<body>
	<form method="post">
		E-mail <input type="text" name="email">
		<br>
		Senha <input type="password" name="senha">
		<br>
		<button>Alterar senha</button>
	</form>
	<?php

	include 'bd.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$pdo = conexao();
		$sql = "SELECT hash_recupera FROM usuarios WHERE email = :email";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(':email', $email);
		$consulta->execute();

		if ($consulta->rowCount() > 0) {
			$resultado = $consulta->fetch();
			$hashRecupera = $resultado['hash_recupera'];

			$hashEnviado = $_GET['hashrecupera'];

			//echo "<br>Hash salvo: $hashRecupera <br> Hash vindo: $hashEnviado <br>";

			if($hashRecupera == $hashEnviado) {
				$hashSenha = password_hash($senha,PASSWORD_DEFAULT);

				$sql = "UPDATE usuarios SET hash_senha = :hash_senha WHERE email = :email";
				$consulta = $pdo->prepare($sql);
				$consulta->bindParam(':email', $email);
				$consulta->bindParam(':hash_senha', $hashSenha);
				$consulta->execute();

				echo "Senha alterada!";
			} else {
				echo "erro interno 2";
			}

		} else {
			echo "erro interno 1";
		}
	}
	?>
</body>
</html>