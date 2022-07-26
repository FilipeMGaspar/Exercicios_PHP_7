<?php
/*
    Utilizando a base de dados ..: praticaphp.
	Selecione os seguintes dados, nome e email da tabela ..: fornecedores :.. onde o id seja maior que 1 utilize o mysqli, deve utilizar o prepare e bind_param.

	SELECT nome, email FROM fornecedores where id > 1;
*/ 

    // Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    $id = 1;

   // $querySql = "SELECT nome, email from fornecedores WHERE id = ?";

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
    $stmt->bind_param("i", $id); 
    $stmt->execute();

    $resultado = $stmt->get_result();

    $data = $resultado->fetch_row();

    $conn->close(); // Fecha a ligação á base de dados

    print_r($data);

    /*
    $id = 8;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id); 

    $stmt->execute();

    $resultado = $stmt->get_result();

    $data = $resultado->fetch_row();

    $conn->close();

    print_r($data);
    */