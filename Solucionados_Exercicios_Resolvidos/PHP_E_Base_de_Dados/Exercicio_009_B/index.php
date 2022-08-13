<?php
/*
    Utilizando a base de dados ..: praticaphp
    Apague os seguintes dados na tabela ..: people :.. onde o idpeople seja igual a 4 utilize o mysqli, deve utilizar o prepare e bind_param. 
    Mostre o resultado no monitor.
*/ 

// Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    $idPeople = 3;
/*
    // Query sql e execução
    $stmt = $conn->prepare("DELETE FROM people WHERE idpeople = ?");
    $stmt->bind_param("i", $idPeople);
    $stmt->execute();
*/
    // Mostrar dados no Front
    echo "<table>";
    echo "<th><td> <strong> IdPeople </strong> </td> <td> <strong> UserName </strong> </td> <td> <strong> Gender </strong> </td> <td> <strong> Country </strong> </td> </th>";
    echo "</table>";
    // Encerramento da ligação á base de dados
   // $stmt->close();
    $conn->close();