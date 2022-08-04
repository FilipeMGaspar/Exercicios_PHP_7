<?php
/*
    Utilizando a base de dados ..: praticaphp
    Selecione todos os dados da tabela ..: people
    Mostre os dados no Monitor
*/ 

//Ligação á base de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";

$conn = new mysqli($host, $user, $pass, $db);

$querySQL = "SELECT * FROM people";

$stmt = $conn->prepare($querySQL);

$stmt->execute();

print_r($parameters);