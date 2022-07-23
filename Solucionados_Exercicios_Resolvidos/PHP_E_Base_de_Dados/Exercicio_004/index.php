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


/*
$query = "INSERT INTO fornecedores VALUES 
(
    1, 'Ricardo', 'ricoarrigoni@gmail.com', 'Vende Vasouras',
    2, 'João', 'joao@gmail.com', 'Vende Jornais ',
    3, 'Maria', 'maria@gmail.com', 'Vende papeis recortados'
);";
*/

$conn->query($query);

/*
    INSERT INTO fornecedores (codigo, nome, email, descricao) VALUES 
    (1 , 'João', 'jony£mail.pt', 'asdasdasdas'), 
    (2 , 'Josefina', 'josef@zef.pt', 'zef zef');
*/ 