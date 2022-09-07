<?php
    require_once "configs/liga.php";

    $type = filter_input(INPUT_POST, "type");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpassword");
    
    if($type === "login" || $type === "signup") {

        if($type === "login") {

           if (findByEmail($email, $conn)) {
                echo "Conta encontrada!";
           } else {
                echo "Conta não encontrada!"; 
           }

        }
    
        if($type === "signup") {

            if (findByEmail($email, $conn)) {
                echo "Conta encontrada! Email ou password inválido!"; // Retorna erro de conta ou password
           } else {
                
                if($pass === $confirmPass) {
                    $stmt = $conn->prepare("INSERT INTO utilizadores (email, password) VALUES (?, ?)");
                   // $stmt->bind_param("ss", $email, $finalPassword);
                   echo "Pass Final = " . $finalPassword . "<br>";
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

        $stmt = $conet->prepare("SELECT idUsers, email, email FROM utilizadores WHERE email = ? LIMIT 1");
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

    function dificultaPass($passwd) {
        $secPass = md5($passwd);
        $secPass = base64_encode($secPass);
        $secPass = password_hash($secPass, PASSWORD_DEFAULT);

        return $secPass;
    }