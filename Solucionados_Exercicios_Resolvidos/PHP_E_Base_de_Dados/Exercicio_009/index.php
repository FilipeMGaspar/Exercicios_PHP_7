<?php
/*
     Utilizando a base de dados ..: praticaphp
	Apague os seguintes dados dna tabela ..: fornecedores :.. onde o codigo seja igual que 3 utilize o mysqli, deve utilizar o prepare e bind_param.

	DELETE FROM fornecedores WHERE codigo=3;
*/ 

//Ligação á base de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";

$conn = new mysqli($host, $user, $pass, $db);

