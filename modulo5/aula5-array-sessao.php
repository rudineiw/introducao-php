<!DOCTYPE html>
<html lang="pt-br">
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

			function salvaDado($chave,$dado){
				if(!isset($_SESSION[$chave])){
					$_SESSION[$chave] = array();
				}
				$_SESSION[$chave][] = $dado;
			}

			function leDado($chave){
				if(!isset($_SESSION[$chave])){
					return array();
				}
				return $_SESSION[$chave];
			}			

			session_start();

			$campo = "memória";

			if (recebe("acao") == "salva") {
				$nome = recebe("nome");
				salvaDado($campo,$nome);
				echo "Estou salvando um novo dado";

			} else if (recebe("acao") == "exibe") {
				$retorno = leDado($campo);
				foreach($retorno AS $dado){
					echo $dado . ",";
				}
			}
		?>
	</body>
</html>