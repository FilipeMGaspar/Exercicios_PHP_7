<?php
    /*
        Utilizando a base de dados ..: praticaphp
        Altere os seguintes registos: username de ** Henry ** para * HenryP  na tabela ..: people onde o username seja igual a Henry utilize o mysqli, deve utilizar o prepare e bind_param.
        Mostre os dados.
    */ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    //Query sql
    $query = "UPDATE people SET username = ? WHERE username = ?";