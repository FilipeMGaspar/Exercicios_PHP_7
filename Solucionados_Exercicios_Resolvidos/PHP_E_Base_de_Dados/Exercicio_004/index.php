<?php

/* 
Insira os seguintes dados na tabela fornecedores utilizando o mysqli, sem utilizar o prepare e bind_param.

codigo	      1	                            2	                     3
nome	    Ricardo	                        João	                Maria
email	    ricoarrigoni@gmail.com	    joao@gmail.com	         maria@gmail.com
			
*/

// Ligação á base de dados

$host = "localhost";
$user = "filipe";
$pass = "teste123";
$bd = "praticaphp";

$conn = new mysqli($host, $user, $pass, $bd);

//$query = "";