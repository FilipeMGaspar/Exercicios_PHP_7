<?php
 /*
    Utilizando a base de dados ..: praticaphp.
	Altere os seguintes dados, nome da tabela ..: fornecedores :.. onde o id seja igual que 1 utilize o mysqli, deve utilizar o prepare e bind_param. Mostre o resultado no monitor.

    UPDATE fornecedores SET nome=”Ricardo Arrigoni” WHERE codigo=1;
 */ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);
