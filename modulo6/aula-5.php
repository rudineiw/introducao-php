<?php

require '../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("meu_log");
$log->pushHandler( new StreamHandler('logaula5.log') );

$log->error("Ocorreu um erro");

echo "Gerando logs...";