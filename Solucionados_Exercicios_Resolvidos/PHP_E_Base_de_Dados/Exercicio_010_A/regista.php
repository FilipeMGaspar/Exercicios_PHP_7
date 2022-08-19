<?php
  session_start();
    require_once "configs/liga.php";

    $nome = filter_input(INPUT_POST, "nome");
    $servico = filter_input(INPUT_POST, "servico");
    $custo = filter_input(INPUT_POST, "custo");

   // $custo = number_format($custo, 2, ',', ' '); // Formatção do número com duas casas decimais

    $stmt = $conn->prepare("INSERT INTO cobradores (nome, servico, custo) VALUES (?, ? ,?)");
    $stmt->bind_param("ssd", $nome, $servico, $custo);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    $_SESSION["msg"] = "Registo efetuado Com sucesso";
    $_SESSION["tipo"] = "sucesso";
    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página