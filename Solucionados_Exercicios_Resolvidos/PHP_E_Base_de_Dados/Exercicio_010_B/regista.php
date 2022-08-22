<?php
    session_start();

    require_once "configs/liga.php";

    $data = $_POST;

    $_SESSION["msg"] = "Registo efetuado com sucesso!";
    $_SESSION["tipoOp"] = "sucesso";
    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página