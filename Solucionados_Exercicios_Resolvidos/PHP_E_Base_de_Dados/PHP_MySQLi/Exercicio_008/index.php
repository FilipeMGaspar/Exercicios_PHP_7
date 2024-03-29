<?php
 /*
    Utilizando a base de dados ..: praticaphp.
	Altere o registo nome para *** Ricardo Arrigoni ** na tabela ..: fornecedores :.. onde o codigo seja igual que 1 utilize o mysqli, deve utilizar o prepare e bind_param. Mostre o resultado no monitor.

 */ 

    //Ligação á base de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "praticaphp";

    $conn = new mysqli($host, $user, $pass, $db);

    //Definição do id
    $id = 1;

    $querySql = "UPDATE fornecedores SET nome='Ricardo Arrigoni' WHERE codigo = ?";

    $stmt = $conn->prepare($querySql);    
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo "Nome alterado com sucesso. <br>";

    //Seleção dos dados
    $querySql = "SELECT nome, email, descricao FROM fornecedores WHERE codigo = ?";

    $stmt = $conn->prepare($querySql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $registos = $stmt->get_result();
    $reg = $registos->fetch_assoc();

    echo "<br>";
    echo "<strong>Nome:</strong> " . $reg["nome"] . "<br>";
    echo "<strong>E-mail:</strong> " . $reg["email"] . " <br>";
    echo "<strong>Descrição:</strong> " . $reg["descricao"] . " <br>";