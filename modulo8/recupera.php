<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recupera</title>
</head>
<body>
	<form method="post">
		E-mail <input type="text" name="email">
		<br>
		<button>Recuperar</button>
	</form>
	<br>
	<?php

	include 'email.php';

	function chaveRandomica() {
		$lenght = 32;
		try {
		    $randomBytes = random_bytes($lenght);
		    $randomKey = bin2hex($randomBytes);
		    return $randomKey;
		} catch (Exception $e) {
		    echo "Erro ao gerar a chave randômica: " . $e->getMessage();
		    exit();
		}
	}

	session_start();

	include 'bd.php';

	// teste@teste.com | teste123
	// info@teste.com | info123

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];

		$pdo = conexao();
		$sql = "SELECT id FROM usuarios WHERE email = :email";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(':email', $email);
		$consulta->execute();

		if ($consulta->rowCount() > 0) {
			$resultado = $consulta->fetch();
			$idUsuario = $resultado['id'];

			$hashrecupera = chaveRandomica();

			$pdo = conexao();
			$sql = "UPDATE usuarios SET hash_recupera = :hash_recupera WHERE email = :email";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(':email', $email);
			$consulta->bindParam(':hash_recupera', $hashrecupera);
			$consulta->execute();

			echo '<br><a href="recuperaSenha.php?hashrecupera='.$hashrecupera.'">Redefinir senha</a><br>';

			//echo "Caso o e-mail estiver correto, será enviado uma mensagem de recuperação da senha!";
			//EnviaEmail($email,'Alteração de senha','<br><a href="http://localhost/introducao-php/modulo8/recuperaSenha.php?hashrecupera='.$hashrecupera.'">Redefinir senha</a>');

		} else {
			echo "Caso o e-mail estiver correto, será enviado uma mensagem de recuperação da senha!";
		}
	}
	?>
</body>
</html>