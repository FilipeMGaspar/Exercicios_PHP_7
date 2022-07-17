<?php

 /*
Crie uma tabela de nome fornecedores na base de dados praticaphp utilzando o mysqli, a estrutura da tabela deverá ser a seguinte: 

    codigo	Inteiro  auto incremento 
    nome	Carater (50) não pode ser nulo
    email	Caracter (50)
        Chave primária codigo

*/

//Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $bd);

    //Criação da tabela fornecedores

    $$query = "CREATE TABLE fornecedores (
        codigo INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        descricao TEXT
    );";