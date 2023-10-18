<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Título da página</title>
	</head>
	<body>

		<form>
			<input type="hidden" name="id" value="<?=$id?>">
			Nome: <input name="nome" value="<?=$nome?>">
			<br>
			Nota: <input name="nota" value="<?=$nota?>">
			<br>
			<button name="acao" value="<?=$acao?>"><?=$acao?></button>
		</form>

		<table border="1">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Nota</th>
				<th colspan="2">Ação</th>
			</tr>
			<?php foreach($arrayCadastro as $cadastro) { ?>
				<tr>
					<td><?=$cadastro['id']?></td>
					<td><?=$cadastro['nome']?></td>
					<td><?=$cadastro['nota']?></td>
					<td><a href="?acao=Remover&id=<?=$cadastro['id']?>">Remover</a></td>
					<td><a href="?acao=Consultar&id=<?=$cadastro['id']?>">Consultar</a></td>
				</tr>
			<?php } ?>
		</table>
</body>

</html>