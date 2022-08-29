<?php

    $formType = filter_input(INPUT_POST, "tipoform");
    $nome = filter_input(INPUT_POST, "name");
    $sobrenome = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpass");

    // Verifica se o formulário é do tipo registar evita a injeção de código malicioso
    if ($formType === "registar") {
        
        //Verifica se as senhas conferem / são iguais
        if($pass === $confirmPass) {
            // Criptografia de password
            $finalPassword = dificultPass($pass);
            echo $nome;
            echo "<br>";
            echo $sobrenome;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $finalPassword;
        } else { // Se as senhas não conferem / não são iguais vai ser redirecionado de volta ao formulário
            header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
            $_SESSION["msg"] = "As passwords devem ser iguias!";
        }
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }

    function dificultPass($passwd) {
        
        //$passDificil = md5($passwd);
        //$passDificil = sha1($passwd);
        // $passDificil = base64_encode($passwd);
        // $passDificil = password_hash($passDificil, PASSWORD_DEFAULT);;
        return $passDificil;
    }