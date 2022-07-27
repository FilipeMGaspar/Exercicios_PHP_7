<?php
    /*
        Utilizando a base de dados ..: contas
        Selecione os seguintes dados, nome, servico e custo da tabela ..: cobradores :.. onde o idconta seja maior que 3 utilize o mysqli, deve utilizar o prepare e bind_param.

        SELECT nome, email FROM fornecedores where idconta > 3;
    */ 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "contas";

    $id = 2; // definição do id 

    $conn = new mysqli($host, $user, $pass, $db);

    $querySql = "SELECT nome, servico, custo from cobradores WHERE idconta > ?";

    //Sem mostrar dados no front end
    $stmt = $conn->prepare($querySql);
    $stmt->bind_param("i", $id);    
    $stmt->execute();

    // ..: Como teste mostrar dados no front *****
    
    $result = $stmt->get_result(); 

    $data = $result->fetch_all(); // Obtem todos os dados contidos na tabela cobradores

    $conn->close(); // Fecha a ligação á base de dados

    print_r($data);

    while ($dt = $result->fetch_row()) {
        echo $dt . "<br>";
    }