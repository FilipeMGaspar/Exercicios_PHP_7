<?php
/*
    Utilizando a base de dados ..: contas
    Altere os seguintes dados ** custo ** para 32.65 na tabela ..: cobradores :.. onde o idconta seja igual a 4 utilize o mysqli, deve utilizar o prepare e bind_param. Mostre o resultado no monitor.
*/ 

//Ligação á base de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "contas";

$idconta = 4;
$custo = 32.65;

$conn = new mysqli($host, $user, $pass, $db);

//Atualização de um registo
$stmt = $conn->prepare("UPDATE cobradores SET custo = ? WHERE idconta = ?");
$stmt->bind_param("di", $custo, $idconta);
$stmt->execute();

echo "Dados atualizados com sucesso! <br><br>";
//Seleção dos dados e apresentação de resultado no monitor
$stmt = $conn->prepare("SELECT 	nome, servico, custo FROM cobradores WHERE idconta = ?");
$stmt->bind_param("i", $idconta);
$stmt->execute();

$resultados = $stmt->get_result();
$registo = $resultados->fetch_assoc();

echo "<strong>Fornecedor:</strong> " . $registo["nome"] . "<br>";
echo "<strong>Serviço:</strong> " . $registo["servico"] . "<br>";
echo "<strong>Fatura:</strong> " . $registo["custo"] . "<br>";

$stmt->close();
$conn->close();