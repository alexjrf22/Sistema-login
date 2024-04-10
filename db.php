<?php

    $host = "localhost";
    $user = "root";
    $dbname = "php_basic";
    $pass= "";

    try
    {
        $conn = new PDO ("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    }
    catch(PDOException $err)
    {
        echo ("Erro ao conectar ao banco de dados." . $err);
    }

    