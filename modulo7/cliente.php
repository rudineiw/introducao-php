<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clientes</title>
</head>
<body>

	<p><a href="./produtos">Produtos</a></p>

	<form>
		<input type="hidden" name="id" value="<?=$id?>">
		Nome <input name="nome" value="<?=$nome?>">
		<br>
		E-mail: <input name="email" value="<?=$email?>">
		<br>
		<button name="acao" value="<?=$acao?>"><?=$acao?></button>
	</form>

	<h1>Clientes cadastrados</h1>

	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th colspan="2">Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($arrayCadastro as $cadastro) {
			?>
			<tr>
				<td><?=$cadastro['id']?></td>
				<td><?=$cadastro['nome']?></td>
				<td><?=$cadastro['email']?></td>
				<td><a href="?acao=Remover&id=<?=$cadastro['id']?>">Remover</a></td>
				<td><a href="?acao=Alterar&id=<?=$cadastro['id']?>">Alterar</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>