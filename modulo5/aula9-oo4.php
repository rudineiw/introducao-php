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
			Salário <input name="salario">
			<br>
			<select name="selecao">
				<option value="funcionario">Funcionário</option>
				<option value="socio">Sócio</option>
			</select>
			<br>
			<button name="acao" value="salva">Salva</button>
			<button name="acao" value="exibe">Exibe</button>
		</form>

		<?php

			class Funcionario {
				public $nome;
				public $salario;

				public function __construct($nome, $salario) {
					$this->nome = $nome;
					$this->salario = $salario;
				}

				public function bonificacao() {
					return $this->salario * 1.2;
				}

				public function cargo() {
					return "Funcionário";
				}
			}

			class Socio extends Funcionario {
				public function bonificacao() {
					return $this->salario * 1.5;
				}
				public function cargo() {
					return "Sócio";
				}
			}

			class Memoria {
				public $chave;

				public function __construct($chave) {
					$this->chave = $chave;
				}

				public function salvaDado($dado) {
					if (!isset($_SESSION[$this->chave])) {
						$_SESSION[$this->chave] = array();
					}
					$_SESSION[$this->chave][] = $dado;
				}

				public function leDado() {
					if (!isset($_SESSION[$this->chave])) {
						return array();
					}
					return $_SESSION[$this->chave];
				}				

			}

			function recebe($par) {
				if (isset($_GET[$par])) return $_GET[$par];
				if (isset($_POST[$par])) return $_POST[$par];
				return "";
			}

			session_start();
			$memoria1 = new Memoria("oo4");

			if (recebe("acao") == "salva") {
				$nome = recebe("nome");
				$salario = recebe("salario");
				if ($nome != "") {
					$pessoa = null;
					if (recebe("selecao") == "funcionario") {
						$pessoa = new Funcionario($nome,$salario);
					} else {
						$pessoa = new Socio($nome,$salario);
					}
					$memoria1->salvaDado($pessoa);
				}
			} else if (recebe("acao") == "exibe") {
				$lista = $memoria1->leDado();
				foreach ($lista as $pessoa) {
					echo "<br>Bônus do " . $pessoa->cargo() . " " . $pessoa->nome . ": " . $pessoa->bonificacao();
				}
			}

		?>
	</body>
</html>