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

    $userNameOld = "Henry";
    $newUserName = "HenryP";

    $conn = new mysqli($host, $user, $pass, $db);

    //prepare da Query sql
    $stmt =$conn->prepare("UPDATE people SET username = ? WHERE username = ?");

    //Bind paran
    $stmt->bind_param("ss", $userNameOld, $newUserName);

    //Execução da query
    $stmt->execute();


    //Mostrar dados no monitor
    $stmt->prepare("SELECT * FROM people WHERE username = ?");
    $stmt->bind_param("s", $newUserName);

    // Fecha a ligação á base de dados
    $stmt->close();
    $conn->close();