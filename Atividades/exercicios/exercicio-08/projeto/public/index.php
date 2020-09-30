<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;

$estado = new Estado(1, "Minas Gerais", "MG");
var_dump($estado);

$cidade = new Cidade(36, "Itabira");
var_dump($cidade);

$produto = new Produto("Camisa", "pç", 50.00, 10);
var_dump($produto);

$connection = new Connection(new AdapterSQLite());
var_dump($connection);

$connection->getAdapter()->open();
$connection->getAdapter()->close();
$connection->getAdapter()->get();