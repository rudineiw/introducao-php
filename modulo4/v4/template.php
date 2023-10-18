<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Título da página</title>
	</head>
	<body>

		<form>
			Nome: <input name="nome">
			<br>
			Nota: <input name="nota">
			<br>
			<button>Enviar</button>
		</form>

		<table border="1">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Nota</th>
				<th>Ação</th>
			</tr>
			<?php foreach($arrayCadastro as $cadastro) { ?>
				<tr>
					<td><?=$cadastro['id']?></td>
					<td><?=$cadastro['nome']?></td>
					<td><?=$cadastro['nota']?></td>
					<td>Remover</td>
				</tr>
			<?php } ?>
		</table>
</body>

</html>