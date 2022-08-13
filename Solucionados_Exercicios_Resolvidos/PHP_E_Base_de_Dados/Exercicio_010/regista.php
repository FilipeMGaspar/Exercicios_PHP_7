<?php
    require_once "configs/liga.php";

    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $descricao = filter_input(INPUT_POST, "descricao");

    $stmt = $conn->prepare("INSERT INTO fornecedores (nome, email, descricao) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $descricao);
    $stmt->execute();

    $conn->close();//Fecha a ligação á base de dados

    $_SESSION["msg"] = "Registo efectuado com sucesso";
    $_SESSION["tipo"] = "sucesso";

    header("Location: index.php");