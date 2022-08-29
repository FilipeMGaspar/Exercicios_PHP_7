<?php
session_start();

require_once "configs/liga.php";

    $formType = filter_input(INPUT_POST, "tipoform");
    $nome = filter_input(INPUT_POST, "name");
    $sobrenome = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpass");

    // Verifica se o formulário é do tipo registar evita a injeção de código malicioso
    if ($formType === "registar") {
        //Verifica se os dados estã preenchidos
        if(!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($pass) && !empty($confirmPass)) {
            //Verifica se as senhas conferem / são iguais
            if($pass === $confirmPass) {            
                
                // Criptografia de password
                $finalPassword = dificultPass($pass);

                //Inserir dados na base de dados
                $stmt = $conn->prepare("INSERT INTO users (nome, sobrenome, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $nome, $sobrenome, $email, $finalPassword);
                
                

            } else { // Se as senhas não conferem / não são iguais vai ser redirecionado de volta ao formulário
                header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
                $_SESSION["msg"] = "As passwords devem ser iguais!";
            }

        } else {
            header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
            $_SESSION["msg"] = "Todos os dados devem ser preenchidos!";
        }

    } else {
        $_SESSION["msg"] = "Dados do formulário inválidos. Erro de envio!";
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }

    // Função para criptografar a password
    function dificultPass($passwd) {        
        $passDificil = sha1($passwd);
        $passDificil = base64_encode($passDificil);
        $passDificil = password_hash($passDificil, PASSWORD_DEFAULT);
        return $passDificil;
    }