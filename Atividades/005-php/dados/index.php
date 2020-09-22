<?php
    require_once 'connection.php';

    //Controller -> Model

    $estados = $connection->query("SELECT * FROM estados");
    
    //var_dump($estados->fetchAll());

    //View, include e require podem ser usados
    //include //busca pelo arquivo, se usar include_once inclui o arquivo somente uma vez, mesmo se o comando for repetido

    require 'estadosView.php'; //se o arquivo nao existir para a execução
