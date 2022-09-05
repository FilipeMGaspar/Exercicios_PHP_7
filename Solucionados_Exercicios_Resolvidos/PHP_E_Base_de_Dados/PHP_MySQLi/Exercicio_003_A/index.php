<?php
 /*
Utilizando a base de dados ..: contas
Crie uma tabela de nome ..: cobradores :.. utilzando o mysqli, a estrutura da tabela deverá ser a seguinte: 

    id	Inteiro  auto incremento 
    nome	Carater (50) não pode ser nulo
    fornece	Caracter (50)
    custo   decimal
        Chave primária codigo

*/

//Ligação á base de dados com mysqli
$host = "localhost";
$user = "root";
$pass = "";
$db = "contas";

$conn = new mysqli($host, $user, $pass, $db);

$query = "CREATE TABLE cobradores (
    idconta INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL, 
    servico VARCHAR(50) NOT NULL,
    custo DECIMAL(19 , 4 ) NOT NULL
);";


$conn->query($query); // Execução da Query

  //Fecha a ligação á base de dados Mysql
$conn->close();