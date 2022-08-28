<?php

    $formType = filter_input(INPUT_POST, "tipoform");
    $nome = filter_input(INPUT_POST, "name");
    $sobrenome = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpass");

    echo $formType;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $sobrenome;
    