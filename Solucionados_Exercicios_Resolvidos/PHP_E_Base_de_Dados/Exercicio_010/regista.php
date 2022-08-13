<?php
    session_start();

    require_once "configs/liga.php";

    $data[] = $_POST;

    print_r($data);

    $conn->close();//Fecha a ligação á base de dados
