<?php
     /*
        Utilizando a base de dados ..: contas
	    Selecione todos os dados da tabela ..: cobradores :.. utilizando o mysqli, sem utilizar o prepare e bind_param.
    */

    //Ligação á base de dados
    $host = "Localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "contas";

    $conn = new mysqli($host, $user, $pass, $db);

    $querySql = "SELECT * FROM cobradores";

    /* Mostrar dados na tela */
    $consulta = $conn->query($querySql);

    while($reg = $consulta->fetch_object()) {
        echo $reg->nome . " | " . $reg->servico . " | " . $reg->custo . "<br>";
    }

    $conn->close(); //Fecha a ligação á base de dados