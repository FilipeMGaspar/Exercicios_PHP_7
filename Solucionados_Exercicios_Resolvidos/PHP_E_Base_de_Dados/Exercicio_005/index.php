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

    $resultados = $consulta->fetch_all();

    foreach ($resultados as $resultado){
        echo $resultado;
    }

    //print_r($result);

    $conn->close(); // Fecha a ligação á bas de dados