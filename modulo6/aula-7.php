<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Página de envio de aquivos</title>
</head>
<body>
	<h1>Fromulário de envio de arquivos</h1>
	<form method="post" enctype="multipart/form-data">
		Selecione um arquivo para envio:
		<br>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br>
		<input type="submit" value="Enviar arquivo" name="submit">
	</form>
	<?php
		if (isset($_POST['submit']) ) {
			$pasta = "upload/";
			$arquivo = $pasta . basename($_FILES["fileToUpload"]["name"]);
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $arquivo)) {
				echo $arquivo . " enviado com sucesso!";
			} else {
				echo "Ocorreu um erro no envio";
			}
		}
	?>
</body>
</html>