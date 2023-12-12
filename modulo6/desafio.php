<?php

// variáveis para conexão ao banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aulaphp";
$porta = 3306;

// conexão ao banco de dados
$conexao = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);

// seleção de dados na tabela notas
$sql = "SELECT id,nome,nota FROM notas";
$consulta = $conexao->prepare($sql);
$consulta->execute();

// capturar os resultados da consulta
$result = $consulta->fetchALL(PDO::FETCH_ASSOC);

//print_r($result);

require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Criar uma instância do PhpSpreadsheet
$spreadsheet = new Spreadsheet();

// Configurar os dados no Excel
$sheet = $spreadsheet->getActiveSheet();
$row = 1;

// Adicionar cabeçalhos
foreach ($result[0] as $key => $value) {
    $sheet->setCellValueByColumnAndRow($row++, 1, $key);
}

// Adicionar os dados
$row = 2;
foreach ($result as $row_data) {
    $col = 1;
    foreach ($row_data as $value) {
        $sheet->setCellValueByColumnAndRow($col++, $row, $value);
    }
    $row++;
}

// Salvar o arquivo Excel
$writer = new Xlsx($spreadsheet);
$arquivo = 'notas.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename=' . $arquivo);

$writer->save('php://output');