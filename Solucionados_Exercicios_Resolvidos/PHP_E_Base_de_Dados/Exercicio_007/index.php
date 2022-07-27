<?php
/*
    Utilizando a base de dados ..: praticaphp
    Selecione os seguintes dados, nome e email da tabela ..: fornecedores :.. onde o codigo seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param. Coloque os dados numa variável. Mostre os dados contidos na variável no monitor. 

    SELECT nome, email FROM fornecedores where id > 2;
*/

    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados