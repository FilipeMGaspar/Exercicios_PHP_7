<?php
    require_once "configs/liga.php";

    $nome = filter_input(INPUT_POST, "nome");
    $servico = filter_input(INPUT_POST, "servico");
    $custo = filter_input(INPUT_POST, "custo");

    echo "$nome | $servico | $custo";