<?php

    $formType = filter_input(INPUT_POST, "tipoform");
    $nome = filter_input(INPUT_POST, "name");
    $sobrenome = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpass");

    if ($formType === "registar") {
        echo $nome;
        echo "<br>";
        echo $sobrenome;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $pass;
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }