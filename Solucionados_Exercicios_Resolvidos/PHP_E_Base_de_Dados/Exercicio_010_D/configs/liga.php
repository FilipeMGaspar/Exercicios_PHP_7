<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mysqliprojet";

    $conn = new mysqli($host, $user, $pass, $db);

    
/*
    CREATE TABLE users (
        idUsers INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        nome VARCHAR(20) NOT NULL,
        sobrenome VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(200) NOT NULL
    );
*/