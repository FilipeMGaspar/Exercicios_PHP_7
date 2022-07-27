<?php
    /*
        Utilizando a base de dados ..: contas
        Selecione os seguintes dados, nome, servico e custo da tabela ..: cobradores :.. onde o codigo seja maior que 3 utilize o mysqli, deve utilizar o prepare e bind_param.

        SELECT nome, email FROM fornecedores where id > 3;
    */ 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "contas";

    $conn = new mysqli($host, $user, $pass, $db);