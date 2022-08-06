<?php
/*
    Utilizando a base de dados ..: contas
    Altere os seguintes dados ** custo ** para 32.65 na tabela ..: cobradores :.. onde o idconta seja igual a 4 utilize o mysqli, deve utilizar o prepare e bind_param. Mostre o resultado no monitor.
*/ 

//Ligação á base de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "contas";

$conn = new mysqli($host, $user, $pass, $db);