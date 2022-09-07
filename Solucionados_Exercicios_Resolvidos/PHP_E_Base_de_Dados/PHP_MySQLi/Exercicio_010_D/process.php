<?php
    require_once "configs/liga.php";

    $type = filter_input(INPUT_POST, "type");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpassword");
    
    if($type === "login" || $type === "signup") {

        if($type === "login") {

           if (findByEmail($email, $conn)) {
                //verifica a password recebida com a password guardada na base de dados
                $stmt = $conn->prepare("SELECT email, password FROM utilizadores WHERE  email = ? LIMIT 1");
                $stmt->bind_param("s", $email);
                
                try {
                    $stmt->execute();
                    $dados = $stmt->get_result();
                    $resultado = $dados->fetch_assoc();
                } catch (Exception $e){
                    $error = $e->getMessage();
                } 

               echo  $resultado["password"]. "<br>";  
               $passForm = dificultaPass($pass);

                if () {
                    echo "<br>Seja bem vindo!";
                }

           } else {
                echo "Email ou password incorretos! <br> Se não tem conta crie uma!"; 
           }

        }
    
        if($type === "signup") {

            if (findByEmail($email, $conn)) {
                echo "Teste outro Email ou password!"; // Retorna erro de conta ou password
           } else {
                
                if($pass === $confirmPass) {

                    $stmt = $conn->prepare("INSERT INTO utilizadores (email, password) VALUES (?, ?)");
                    $finalPassword = gerarPasswdHash($pass);
                    $stmt->bind_param("ss", $email, $finalPassword);

                    try {           
                        $stmt->execute();    
                        echo "Dados registados com sucesso!";       
                    } catch (Exception $e){
                        $error = $e->getMessage();
                       // $_SESSION["msg"] = "Não foi possivel registar os dados!";
                       // $_SESSION["type"] = "erro";
                    }                    
                   
                } else {
                    echo "As passwords não correspondem!"; 
                }
                
           }
        }

    } else {
        // $_SESSION["msg"] = "Formulário desconhecido!";
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }
  
    function findByEmail($mail, mysqli $conet) {

        $stmt = $conet->prepare("SELECT email FROM utilizadores WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $mail);

        try {           
            $stmt->execute();           
        } catch (Exception $e){
            $error = $e->getMessage();
           // $_SESSION["msg"] = "Não foi possivel registar os dados!";
           // $_SESSION["type"] = "erro";
        }
        $dados = $stmt->get_result();

        if($dados->num_rows > 0) {
            return true;
        } else {
            return false;
        }

    }

    function criptoPass($passwd) { // encripta a password
        $secPass = md5($passwd);
        $secPass = base64_encode($secPass);

        return $secPass;
    }

    function gerarPasswdHash($palavraPass) {
        $txt = criptoPass($palavraPass);
        $hash = password_hash($txt, PASSWORD_DEFAULT);

        return $hash;
    }

    function testaPassHash($palavraPass, $passwdHash) {
        $testaPass = password_verify(criptoPass($palavraPass), $passwdHash);

        return $testaPass;
    }   