<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Título da página</title>
	</head>
	<body>
		<form>
			Nome <input name="nome">
			<br>
			<select name="selecao">
				<option value="campo1">Campo 1</option>
				<option value="campo2">Campo 2</option>
				<option value="campo3">Campo 3</option>
			</select>
			<br>
			<button name="acao" value="salva">Salva nome</button>
			<button name="acao" value="exibe">Exibe nome</button>
		</form>
		<?php
			function recebe($par){
				if (isset($_GET[$par])) return $_GET[$par];
				if (isset($_POST[$par])) return $_POST[$par];
				return "";
			}

			session_start();

			if (recebe("acao") == "salva") {
				$_SESSION['Aula2_nome'] = recebe("nome");
			} else if (recebe("acao") == "exibe") {
				if (isset($_SESSION["Aula2_nome"]))
					$nome = $_SESSION["Aula2_nome"];
					echo "O nome salvo é $nome";
			}
		
		?>
	</body>
</html>