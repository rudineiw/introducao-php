<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Produto</title>
</head>
<body>
	<form>
		Nome <input name="nome">
		<br>
		Valor: <input name="valor">
		<br>
		<button name="acao" value="Cadastrar">Cadastrar</button>
	</form>

	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($arrayCadastro as $cadastro) {
			?>
			<tr>
				<td><?=$cadastro['id']?></td>
				<td><?=$cadastro['nome']?></td>
				<td><?=$cadastro['valor']?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>