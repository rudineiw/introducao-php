<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Introdução à Orientação a Objetos</title>
	</head>
	<body>
		<?php
			class Pessoa {
				public $nome;
				public $idade;

				public function __construct($nome, $idade) {
					$this->nome = $nome;
					$this->idade = $idade;
				}

				public function exibirInformacoes() {
					echo "Nome: " .$this->nome . ", Idade: " . $this->idade . " anos.";
				}
			}
		
			$pessoa1 = new Pessoa("João", 30);

			echo "Informações da pessoa 1:<br>";
			$pessoa1->exibirInformacoes();
		?>
	</body>
</html>