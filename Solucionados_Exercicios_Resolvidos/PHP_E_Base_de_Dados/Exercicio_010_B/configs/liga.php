<?php
/*
        Utilizando a base de dados ..: praticaphp
        Insira os dados abaixo na tabela ..: people

        idPeople        username        gender          country

            9             Josefina        f               França
            10            Mário           m               Portugal   
            11            Luisa           f               Espanha
*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";

$conn = new mysqli($host, $user, $pass, $db);