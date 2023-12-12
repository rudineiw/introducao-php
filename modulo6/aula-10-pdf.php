<?php

// Carregar o autoloader do Composer
require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<h1>Meu documento pdf</h1><p>linha 1</p><p>linha 2</p>');

$mpdf->Output('MeuDocumento.pdf','D');