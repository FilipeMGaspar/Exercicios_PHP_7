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
    $stmt = $conn->prepare("DELETE FROM people WHERE idPeople = ?");
    $stmt->bind_param("i", $idPeople);
    $stmt->execute();
*/
    // Selção dos dados    
    $stmt = $conn->prepare("SELECT * FROM people");
    $stmt->execute();

    $resultados = $stmt->get_result();//Obteção dos dados

    // Mostrar dados no Front
    echo "<table>";
    echo "<tr><td> <strong> IdPeople </strong> </td> <td> <strong> UserName </strong> </td> <td> <strong> Gender </strong> </td> <td> <strong> Country </strong> </td> </tr>";
    while ($reg = $resultados->fetch_assoc()){
        echo "<tr>" . "<td>" . $reg["idPeople"] . "</td><td>" . $reg["username"] . "</td><td>" . $reg["gender"] . "</td><td>" . $reg["country"] ."</td> </tr>";
    }
    echo "</table>";
    // Encerramento da ligação á base de dados
   // $stmt->close();
    $conn->close();