<?php
    session_start();

    require_once "configs/liga.php";

    $username = filter_input(INPUT_POST, "username");
    $gender = filter_input(INPUT_POST, "gender");
    $country = filter_input(INPUT_POST, "country");

    $stmt = $conn->prepare("INSERT INTO people (username, gender, country) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",  $username, $gender, $country);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    $_SESSION["msg"] = "Registo efetuado com sucesso!";
    $_SESSION["tipoOp"] = "sucesso";

    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página

    /*
        Utilizando a base de dados ..: praticaphp
        Insira os dados abaixo na tabela ..: people

        idPeople        username        gender          country

            9             Josefina        f               França
            10            Mário           m               Portugal   
            11            Luisa           f               Espanha
*/