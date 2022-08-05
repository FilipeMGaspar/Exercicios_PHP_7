<?php
/*
    Utilizando a base de dados ..: praticaphp
    Selecione todos os dados da tabela ..: people
    Mostre os dados no Monitor
*/ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    $querySQL = "SELECT * FROM people";

    $stmt = $conn->prepare($querySQL);

    $stmt->execute();

    $dados = $stmt->get_result();
    echo "<table>";
    echo "<tr> <td># ID</td> <td>Username</td> <td>Gender</td> <td>Country</td> </tr>";
    while ($dado = $dados->fetch_assoc()) {
        echo "<tr> <td>" . $dado["idPeople"] . "</td><td>". $dado["username"] . "</td><td>" . $dado["gender"] . "</td><td>" . $dado["country"] ."</td></tr>";
    }
