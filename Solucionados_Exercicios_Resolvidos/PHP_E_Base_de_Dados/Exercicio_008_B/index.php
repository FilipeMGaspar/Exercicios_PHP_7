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
    //Bind param
    $stmt->bind_param("ss", $userNameOld, $newUserName);
    //Execução da query
    $stmt->execute();

    echo "<h5>username alterado com sucesso!</h5>";

    //Mostrar dados no monitor
    $stmt->prepare("SELECT * FROM people WHERE username = ?");
    $stmt->bind_param("s", $newUserName);
    $stmt->execute();

    $resultados = $stmt->get_result();
    $resultado = $resultados->fetch_assoc();

    echo "<br>";
    echo "<strong>UserName:</strong> " . $resultado["username"] . "<br>";
    echo "<strong>Gender:</strong> ". $resultado["gender"] . "<br>";
    echo "<strong>Country:</strong> " . $resultado["country"] . "<br>";

    // Fecha a ligação á base de dados
    $stmt->close();
    $conn->close();