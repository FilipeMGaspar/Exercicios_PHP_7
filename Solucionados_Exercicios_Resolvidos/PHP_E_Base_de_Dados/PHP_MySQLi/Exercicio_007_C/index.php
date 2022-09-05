<?php

/*
        Utilizando a base de dados ..: praticaphp
        Insira os dados abaixo na tabela ..: people

        idPeople        username        gender          country

            1             Mike            m               USA
            2             Sarah           f               Denmark
            3             Gregory         m               UK
            4             Julie           f               USA
            5             Maria           f               Mexico
            6             Henry           m               China
            7             Beth            f               Canada
            8             Sandeep         m               India
*/

//Ligação á base de dados

$host = "localhost";
$user = "root";
$pass = "";
$db = "praticaphp";

$conn = new mysqli($host, $user, $pass, $db);

$querySql = "INSERT INTO people (username, gender, country) VALUES (?, ? , ?)"; // Query sql 

$stmt = $conn->prepare($querySql); // Prepare da querySQl

$uname = "Mike";
$gender = 'm';
$coutry = "USA";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Sarah";
$gender = 'f';
$coutry = "Denmark";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Gregory";
$gender = 'm';
$coutry = "UK";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Julie";
$gender = 'f';
$coutry = "USA";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Maria";
$gender = 'f';
$coutry = "Mexico";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Henry";
$gender = 'm';
$coutry = "China";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Beth";
$gender = 'f';
$coutry = "Canada";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

$uname = "Sandeep";
$gender = 'm';
$coutry = "India";

$stmt->bind_param("sss", $uname, $gender, $coutry);

$stmt->execute();

//Fechar a ligação á base de dados
$stmt->close();
$conn->close();