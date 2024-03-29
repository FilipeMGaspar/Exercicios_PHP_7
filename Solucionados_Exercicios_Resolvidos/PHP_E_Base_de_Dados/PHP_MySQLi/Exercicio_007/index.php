<?php
/*
    Utilizando a base de dados ..: praticaphp
    Selecione os seguintes dados, nome e email da tabela ..: fornecedores :.. onde o codigo seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param. Coloque os dados numa variável. Mostre os dados contidos na variável no monitor. 

*/

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $dados = [];
    $id = 2;

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $querySql = "SELECT nome, email FROM fornecedores WHERE codigo > ?";

    $stmt = $conn->prepare($querySql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $dados = $stmt->get_result();

    $res = $dados->fetch_all();

    for($i = 0; $i < count($res); $i++){
        for ($j = 0; $j < count($res[$i]); $j++) {
            echo $res[$i][$j] . " | ";
        }
        echo "<br>";
    }

    echo "<br><br>";

    print_r($res);