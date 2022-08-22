<?php
    session_start();

    require_once "configs/liga.php";

    $data = $_POST;

    //print_r($data);
   

    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página