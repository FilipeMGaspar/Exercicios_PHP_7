<?php
/*
    Utilizando a base de dados ..: praticaphp.
	Selecione os seguintes dados, nome e email da tabela ..: fornecedores :.. onde o codigo seja maior que 1 utilize o mysqli, deve utilizar o prepare e bind_param.

	SELECT nome, email FROM fornecedores where id > 1;
*/ 

    // Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    $id = 1; // Id do fornecedor

    $query = "SELECT nome, email FROM fornecedores WHERE codigo > ?";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $resultado = $stmt->get_result();

    //$data = $resultado->fetch_row(); //Obtem apenas um resultado
    $data = $resultado->fetch_all(); // Obtem todos os resultados

    $conn->close(); // Fecha a ligação á base de dados

    echo "<br><br>";
    print_r($data);