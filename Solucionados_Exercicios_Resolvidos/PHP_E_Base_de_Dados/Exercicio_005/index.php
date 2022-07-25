<?php
    /*
        Utilizando a base de dados praticaphp.
	    Selecione todos os dados da tabela fornecedores utilizando o mysqli, sem utilizar o prepare e bind_param.
    */

    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $query = "SELECT * FROM fornecedores";

    $consulta = $conn->query($query);

    $resultados = $consulta->fetch_assoc();

    foreach ($resultados as $resultado){
        echo $resultado . " | ";
    }

    echo "<br><br>";
    print_r($resultados);

    $conn->close(); // Fecha a ligação á bas de dados