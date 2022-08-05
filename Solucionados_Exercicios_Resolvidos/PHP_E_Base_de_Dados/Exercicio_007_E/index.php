<?php
    /*
        Utilizando a base de dados ..: praticaphp
        Selecione os seguintes registos, username, gender e country  da tabela ..: people onde o idPeople seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param.
        Mostre os dados.
    */ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db =  "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 2;

    //Query sql
    $querySql = "SELECT username, gender, country FROM people WHERE idPeople > ?";

    $stmt = $conn->prepare($querySql);
    