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

			class Memoria {
				public $chave;

				public function __construct($chave) {
					$this->chave = $chave;
				}

				public function salvaDado($dado){
					if(!isset($_SESSION[$this->chave])){
						$_SESSION[$this->chave] = array();
					}
					$_SESSION[$this->chave][] = $dado;
				}

				public function leDado(){
					if(!isset($_SESSION[$this->chave])){
						return array();
					}
					return $_SESSION[$this->chave];
				}

			}

			function recebe($par){
				if (isset($_GET[$par])) return $_GET[$par];
				if (isset($_POST[$par])) return $_POST[$par];
				return "";
			}


			session_start();

			$memoria1 = new Memoria("memoria1");

			if (recebe("acao") == "salva") {
				$nome = recebe("nome");
				$memoria1->salvaDado($nome);
				echo "Estou salvando um novo dado";

			} else if (recebe("acao") == "exibe") {
				$retorno = $memoria1->leDado();
				foreach($retorno AS $dado){
					echo $dado . ",";
				}
			}
		?>
	</body>
</html>