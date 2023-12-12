<?php

// Carregar o autoloader do Composer
require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Mpdf\Mpdf;

// URL da página da web a ser convertida em PDF
$url = 'https://digitalside.info';

// Baixar o conteúdo HTML da página da web
$html = file_get_contents($url);

// Configurar e instanciar o objeto mPDF
$mpdf = new Mpdf();

// Adicionar o HTML ao mPDF
$mpdf->WriteHTML($html);

// Salvar ou exibir o PDF
$mpdf->Output('digitalside.pdf', 'D'); // 'D' para download, 'F' para salvar no servidor, 'I' para exibir no navegador