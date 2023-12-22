<?php

$senha = "senha123";
$hash = password_hash($senha,PASSWORD_DEFAULT);

echo "A senha é: $senha <br>";
echo "O hash é: $hash <br>";
//echo strlen($hash) . "<br>";

$senhaDigitada = "senha123";

if (password_verify($senhaDigitada, $hash)) {
	echo "senha OK";
} else {
	echo "senha inválida";
}