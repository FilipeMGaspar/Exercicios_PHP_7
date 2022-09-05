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
                echo "Conta encontrada!"; // Retorna erro de conta ou password
           } else {
                echo "Conta não encontrada!"; 
                //Efetua o registo
           }
        }

    } else {
        // $_SESSION["msg"] = "Formulário desconhecido!";
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }
  
    function findByEmail($mail, mysqli $conet) {

        $stmt = $conet->prepare("SELECT 	idUsers, email, email FROM utilizadores WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $mail);

        try {           
            $stmt->execute();           
        } catch (Exception $e){
            $error = $e->getMessage();
           // $_SESSION["msg"] = "Não foi possivel registar os dados!";
           // $_SESSION["type"] = "erro";
        }
        $dados = $stmt->get_result();

        if($dados ->num_rows > 0) {
            return true;
        } else {
            return false;
        }

    }