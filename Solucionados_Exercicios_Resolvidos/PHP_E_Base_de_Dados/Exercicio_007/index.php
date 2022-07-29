<?php
/*
    Utilizando a base de dados ..: praticaphp
    Selecione os seguintes dados, nome e email da tabela ..: fornecedores :.. onde o codigo seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param. Coloque os dados numa variável. Mostre os dados contidos na variável no monitor. 

*/

    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "praticaphp";

    $id = 2;

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $querySql = "SELECT nome, email FROM fornecedores WHERE codigo > ?";

    $stmt = $conn->prepare($querySql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

   $resultados = $stmt->get_result();

   $data = $resultados->fetch_all();

   $teste = $resultados->fetch_assoc();

   print_r($teste);