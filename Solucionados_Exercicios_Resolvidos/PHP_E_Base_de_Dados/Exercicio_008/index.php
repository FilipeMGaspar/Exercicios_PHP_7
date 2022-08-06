<?php
 /*
    Utilizando a base de dados ..: praticaphp.
	Altere o registo nome para *** Ricardo Arrigoni ** na tabela ..: fornecedores :.. onde o codigo seja igual que 1 utilize o mysqli, deve utilizar o prepare e bind_param. Mostre o resultado no monitor.

    UPDATE fornecedores SET nome=”Ricardo Arrigoni” WHERE codigo=1;
 */ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    //Definição do id
    $id = 1;

    $querySql = "UPDATE fornecedores SET nome='Ricardo Arrigoni' WHERE codigo = ?";