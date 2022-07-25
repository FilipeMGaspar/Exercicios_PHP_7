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

    while ($resultados = $consulta->fetch_object()){
        echo $resultados->nome . " | " . $resultados->email . " | " . $resultados->descricao ."<br>";
    }

    $conn->close(); // Fecha a ligação á bas de dados