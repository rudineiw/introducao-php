<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Título da página</title>
	</head>
	<body>
		<?php
			$array1 = array();
			print_r($array1);
			echo "<br>";

			$array1[] = 10;
			print_r($array1);
			echo "<br>";

			$array1[] = 20;
			print_r($array1);
			echo "<br>";

			$array1[] = 30;
			print_r($array1);
			echo "<br>";

			echo "<hr>";

			foreach ($array1 AS $item) {
				echo "Ítem do array: ($item) <br>";
			}
		?>
	</body>
</html>