<?php
//Inicio da coneção com o banco de dados utilizando PDO
$host = "localhost";
$port = 3306;
$dbname = "celke";
$user = "root";
$pass = "";

try {
    //Coneção com utilização de porta utp
    $conn = new PDO("mysql:host=$host;port=port;dbname=$dbname", $user, $pass);
    echo "Ligação á base de dados efectuada com sucesso";
} catch (PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso.<br>Erro gerado ". $err->getMessage();
}