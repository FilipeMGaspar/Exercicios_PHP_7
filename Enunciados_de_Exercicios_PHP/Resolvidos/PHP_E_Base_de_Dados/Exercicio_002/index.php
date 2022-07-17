<?php
    /* 	Crie uma ligação á base de dados praticaphp utilizando o mysqli, utilizando variaveis */ 

    $hostname = "localhost";
    $user = "root";
    $password = "";
    $bDados = "praticaphp";

    // $conn = new mysqli("hostname", "username", "password", "Base_de_Dados");

    $ligaBdados = new mysqli($hostname, $user, $password, $bDados);