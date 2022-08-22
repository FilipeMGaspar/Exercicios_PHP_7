<?php
    session_start();

    require_once "configs/liga.php";

    $data = $_POST;

    //print_r($data);
   $_SESSION["msg"] = "Registo efetuado com sucesso!";

    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página