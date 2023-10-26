<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Título da página</title>
	</head>
	<body>
		<form method="POST">
			Nome <input name="nome">
			<br>
			<select name="selecao">
				<option value="campo1">Campo 1</option>
				<option value="campo2">Campo 2</option>
				<option value="campo3">Campo 3</option>
			</select>
			<br>
			<button name="acao" value="exibe">Exibe</button>
		</form>
		<?php
			function recebe($par){
				if (isset($_GET[$par])) return $_GET[$par];
				if (isset($_POST[$par])) return $_POST[$par];
				return "";
			}
			$teste = recebe("nome");
			echo $teste;
		?>
	</body>
</html>