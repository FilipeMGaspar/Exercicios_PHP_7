<?php
/*
     Utilizando a base de dados ..: praticaphp
	Apague os seguintes dados na tabela ..: fornecedores :.. onde o codigo seja igual que 3 utilize o mysqli, deve utilizar o prepare e bind_param.

*/ 

//Ligação á base de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";

$conn = new mysqli($host, $user, $pass, $db);

$codigo = 5;

// Query sql e execução
$querySql = "DELETE FROM fornecedores WHERE codigo = ?";
$stmt = $conn ->prepare($querySql);
$stmt->bind_param("i", $codigo);
$stmt->execute();

//Seleção dos dados após apagar
$stmt = $conn->prepare("SELECT * FROM fornecedores");
$stmt->execute();

$resultados = $stmt->get_result();

while ($reg = $resultados->fetch_assoc()) {
	echo "| Código ..: " . $reg["codigo"] . " | Nome ..:" . $reg["nome"] . " | Descrição ..: " . $reg["descricao"] . "<br>";
}

// Fecha a ligação á base de dados
$stmt->close();
$conn->close();