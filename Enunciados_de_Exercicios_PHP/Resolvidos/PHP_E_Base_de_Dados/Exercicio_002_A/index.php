<?php 
   /* 	Crie uma ligação á base de dados contas utilizando o mysqli, utilizando variaveis */ 

   $hostname = "127.0.0.1";
   $username = "filipe"; 
   $password = "teste123";
   $bDados = "contas";

   // $conn = new mysqli ("hostname", "username", "password", "Base_de_Dados");

   $ligaBdados = new mysqli($hostname, $username, $password, $bDados);