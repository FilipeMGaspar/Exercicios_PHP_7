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

    $id = 1;
    
    $conn = new mysqli($host, $user, $pass, $db);

    $querySql = "SELECT nome, email from fornecedores WHERE id > ?";

    $stmt = $conn->prepare($querySql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->fetch();

    print_r($resultado);


    $conn->close(); // Fecha a ligação á base de dados