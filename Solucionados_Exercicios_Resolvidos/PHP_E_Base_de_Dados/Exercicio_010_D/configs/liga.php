<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mysqliprojet";

    $conn = new mysqli($host, $user, $pass, $db);


/*
    CREATE TABLE utilizadores (
        idUsers INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(200) NOT NULL
    );
*/