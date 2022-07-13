<?php
//Inicio da coneção com o banco de dados utilizando PDO
$host = "localhost";
//$port = 3306;
$dbname = "celke";
$user = "root";
$pass = "";

try {
        // Conexão com utilização de porta utp
        // $conn = new PDO("mysql:host=$host;port=port;dbname=$dbname", $user, $pass);

    // Conexão sem porta UTP
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    echo "Ligação á base de dados efectuada com sucesso";
} catch (PDOException $err){
    echo "Erro: Ligação á base de dados não foi realizada com sucesso.<br>Ocorreu o seguinte erro ..: ". $err->getMessage();
}