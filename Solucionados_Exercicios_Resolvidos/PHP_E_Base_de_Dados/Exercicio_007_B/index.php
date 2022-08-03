<?php
    /*
        Utilizando a base de dados ..: praticaphp
        Crie a tabela ..: people

        idPeople    Inteiro             Chave primária auto incremento
        username    caracteres(15)      Não pode ser nulo
        gender      carcater(1)         Não pode ser nulo
        country     caracter(10)        Não pode ser nulo



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

$conn = new mysqli($host, $user, $pass, $db);

//Query Sql 
$querySql = "CREATE TABLE people (
    idPeople INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(15) NOT NULL,
    gender CHARACTER NOT NULL,
    country VARCHAR(10) NOT NULL
)";

// Prepare statement
$stmt = $conn->prepare($querySql);

//Execução da query
$stmt->execute();

//Fecha a ligação á base de dados
$stmt->close();
$conn->close();