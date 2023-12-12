<?php

// Carregar o autoloader do Composer
require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$planilha = new Spreadsheet();

$aba = $planilha->getActiveSheet();

$aba->setCellValue('A1','Nome');
$aba->setCellValue('B1','Idade');

$aba->setCellValue('A2','João');
$aba->setCellValue('B2',30);

$aba->setCellValue('A3','Maria');
$aba->setCellValue('B3',25);

$writer = new Xlsx($planilha);
$arquivo = 'exemplo.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename=' . $arquivo);

$writer->save('php://output');