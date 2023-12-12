<?php

// Carregar o autoloader do Composer
require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Caminho para o arquivo Excel
$excelFilePath = 'upload/p1.xlsx';

// Carregar a planilha do Excel
$spreadsheet = IOFactory::load($excelFilePath);

// Selecionar a primeira planilha (índice 0)
$sheet = $spreadsheet->getSheet(0);

// Obter o número total de linhas e colunas na planilha
$totalRows = $sheet->getHighestRow();
$totalCols = $sheet->getHighestColumn();

// Iniciar a saída HTML
echo '<table border="1">';

// Iterar sobre as linhas
for ($row = 1; $row <= $totalRows; $row++) {
    echo '<tr>';
    // Iterar sobre as colunas
    for ($col = 'A'; $col <= $totalCols; $col++) {
        // Obter o valor da célula
        $cellValue = $sheet->getCell($col . $row)->getValue();
        echo '<td>' . $cellValue . '</td>';
    }
    echo '</tr>';
}

// Fechar a tabela HTML
echo '</table>';