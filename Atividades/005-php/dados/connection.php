<?php
    
    //Configuração
    $dbfile = "./db/database.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";//endereço do servidor que proverá o acesso

    $strConnection = "sqlite:" . $dbfile;// . concatena

    $connection = new PDO($strConnection, $dbuser, $dbpassword);

    //var_dump($connection);