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
			Idade <input name="idade">
			<br>
			<select name="selecao">
				<option value="estagiario">Estagiário(a)</option>
				<option value="funcionario">Funcionário(a)</option>
				<option value="socio">Sócio(a)</option>
			</select>
			<br>
			<button name="acao" value="salva">Salva</button>
			<!-- <button name="acao" value="exibe">Exibe</button> -->
		</form>

		<?php

			class Funcionario {
				public $nome;
				public $salario;

				public function __construct($nome, $salario, $idade) {
					$this->nome = $nome;
					$this->salario = $salario;
					$this->idade = $idade;
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

			class Estagiario extends Funcionario {
				public function bonificacao() {
					return $this->salario * 1.1;
				}
				public function cargo() {
					return "Estagiário";
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
			$memoria1 = new Memoria("desafio2");

			if (recebe("acao") == "salva") {
				$nome = recebe("nome");
				$salario = recebe("salario");
				$idade = recebe("idade");
				if ($nome != "") {
					$pessoa = null;
					if (recebe("selecao") == "funcionario") {
						$pessoa = new Funcionario($nome,$salario,$idade);
					}
					else if (recebe("selecao") == "estagiario") {
						$pessoa = new Estagiario($nome,$salario,$idade);
					} else {
						$pessoa = new Socio($nome,$salario,$idade);
					}
					$memoria1->salvaDado($pessoa);
				}

				$lista = $memoria1->leDado();
				$i = 0;
				echo "<table border=1>";
				echo "<tr>
						<th>Nome</th>
						<th>Idade</th>
						<th>Cargo</th>
						<th>Salário</th>
						<th>Salário + Bonificação</th>
						<th>Ação</th>
					</tr>";
				foreach ($lista as $pessoa) {
					echo "<tr>
							<td>" . $pessoa->nome . "</td>
							<td>" . $pessoa->idade . "</td>
							<td>" . $pessoa->cargo() . "</td>
							<td>" . $pessoa->salario . "</td>
							<td>" . $pessoa->bonificacao() . "</td>
							<td><a href='?acao=Remover&id=" . $i . "'>Remover</a></td>
						</tr>";
					$i++;
				}
				echo "</table>";
			}

		?>
	<hr>

	</body>
</html>