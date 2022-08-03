<?php
    /*
        Utilizando a base de dados ..: praticaphp
        Crie a tabela ..: people

        idPeople    Inteiro             Chave primária auto incremento
        username    caracteres(15)      Não pode ser nulo
        gender      carcater(1)         Não pode ser nulo
        country     caracter(10)        Não pode ser nulo


        CREATE TABLE people (
        	idPeople INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(15) NOT NULL,
            gender CHARACTER NOT NULL,
            country VARCHAR(10) NOT NULL
        );

dados a inserir na tabela

INSERT INTO people (username, gender, country) VALUES (
    "Mike", 'm', "USA",
    "SARAH", 'f', "Denmark",
    "Gregory", 'm', "UK",
    "Julie", 'f', "USA",
    "Maria", 'f', "Mexico",
    "Henry", 'm', "China",
    "Beth", 'f', "Canada",
    "Sandeep", 'm', "india"
);
*/ 

// Ligação á base de dados 
$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";