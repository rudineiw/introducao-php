<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Classes Herdadass</title>
	</head>
	<body>
		<?php
			class Funcionario {
				public $nome;
				public $salario;

				// construtor
				public function __construct($nome, $salario) {
					$this->nome = $nome;
					$this->salario = $salario;
				}
				// método
				public function	bonificacao() {
					return $this->salario * 1.2;
				}
				// método
				public function cargo() {
					return "Funcionário";
				}
			}
		
			// Classe herdada
			class Socio extends Funcionario {
				// método
				public function bonificacao() {
					return $this->salario * 1.5;
				}
				// método 
				public function cargo() {
					return "Sócio";
				}
			}

			$pessoa1 = new Funcionario("João", 900);
			echo "<br>Bônus do " . $pessoa1->cargo() . " " . $pessoa1->nome . ": " . $pessoa1->bonificacao();

			$pessoa2 = new Socio("Pedro", 1900);
			echo "<br>Bônus do " . $pessoa2->cargo() . " " . $pessoa2->nome . ": " . $pessoa2->bonificacao();
		?>
	</body>
</html>