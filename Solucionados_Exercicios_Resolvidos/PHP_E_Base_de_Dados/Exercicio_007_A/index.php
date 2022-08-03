<?php
/*
    Utilizando a base de dados ..: contas
    Selecione os seguintes dados:  nome, servico e custo da tabela ..: cobradores :.. onde o idconta seja maior que 2 utilize o mysqli, deve utilizar o prepare e bind_param. Coloque os dados numa variável. Mostre os dados contidos na variável no monitor. 

*/

//Ligação á base de dados
$host = "localhost";
$user = "filipe";
$pass = "teste123";
$db = "contas";

$conn = new mysqli($host, $user, $pass, $db);

// Definição do id
$id = 2;

//Query sql
$querySql = "SELECT nome, servico, custo FROM cobradores WHERE idconta > ?";

//statement com Prepare da query sql
$stmt = $conn->prepare($querySql);

//bind param
$stmt->bind_param("i", $id);

//Execução da query
$stmt->execute();

//Obter resultados
$resultados = $stmt->get_result();

if($resultados->num_rows > 0) {

    $dados = $resultados->fetch_row();

    echo "<br><br>";
    print_r($dados);

    echo "<br><br>";
}



/*
//Obter resultados da consulta
$resultados = $stmt->get_result();

$dados = $resultados->fetch_all();

//Mostrar dados no monitor
print_r($dados);
*/