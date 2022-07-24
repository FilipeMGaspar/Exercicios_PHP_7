<?php

/* 
Insira os seguintes dados na tabela fornecedores utilizando o mysqli, sem utilizar o prepare e bind_param.

codigo	      1	                            2	                     3
nome	    Ricardo	                        João	                Maria
email	    ricoarrigoni@gmail.com	    joao@gmail.com	         maria@gmail.com
descricao	Vende Vasouras		        Vende Jornais            Vende papeis recortados
*/

// Ligação á base de dados

$host = "localhost";
$user = "filipe";
$pass = "teste123";
$bd = "praticaphp";

$conn = new mysqli($host, $user, $pass, $bd);

$query = "INSERT INTO fornecedores (nome, email, descricao) VALUES ('Ricardo', 'ricoarrigoni@gmail.com', 'Vende Vasouras');";
$conn->query($query);


$query = "INSERT INTO fornecedores (nome, email, descricao) VALUES ('João', 'joao@gmail.com', 'Vende Jornais');";
$conn->query($query);

$query = "INSERT INTO fornecedores (nome, email, descricao) VALUES ('Maria', 'maria@gmail.com', 'Vende Tintas');";
$conn->query($query);

//Fecha a ligação á base de dados
$conn->close();