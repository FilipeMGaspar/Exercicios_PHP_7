<?php
/*
    Utilizando a base de dados ..: contas
    Selecione os seguintes dados:  nome, servico e custo da tabela ..: cobradores :.. onde o idconta seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param. Coloque os dados numa variável. Mostre os dados contidos na variável no monitor. 

*/

//Ligação á base de dados

$host = "localhost";
$user = "filipe";
$pass = "teste123";
$db = "contas";

$conn = new mysqli($host, $user, $pass, $db);

//Query sql
