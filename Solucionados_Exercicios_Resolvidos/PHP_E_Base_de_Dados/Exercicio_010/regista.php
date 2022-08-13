<?php
    session_start();

    require_once "configs/liga.php";

    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $descricao = filter_input(INPUT_POST, "descricao");

    echo "| $nome | $email | $descricao | <br>";
   // $stmt = $conn->prepare("INSERT INTO fornecedores (nome, email, descricao) VALUES (?, ?, ?)");

    $conn->close();//Fecha a ligação á base de dados
