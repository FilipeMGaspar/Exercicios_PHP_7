<?php
/*
    Utilizando a base de dados ..: contas
    Apague os seguintes dados na tabela ..: cobradores :.. onde o idconta seja igual a 3 utilize o mysqli, deve utilizar o prepare e bind_param. 
    Mostre o resultado no monitor.
*/ 

//Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "contas";

    $conn = new mysqli($host, $user, $pass, $db);

    $idconta = 3;

    // Query Sql e execução da mesma
    $stmt = $conn->prepare("DELETE FROM cobradores WHERE idconta = ?");
    $stmt->bind_param("i", $idconta);
    $stmt->execute();

    //Seleção de todos os dados e mostrar no front
    $stmt = $conn->prepare("SELECT * FROM cobradores");
    $stmt->execute();

    $resultados = $stmt->get_result();

    while ($reg = $resultados->fetch_assoc()) {
        echo "IdConta ... " . $reg["idconta"] . " | Fornecedor ..: ". $reg["nome"] . " | Serviço ..: " . $reg["servico"] . "  | Custo ..: " . $reg["custo"]. "€" . "<br>";
    }