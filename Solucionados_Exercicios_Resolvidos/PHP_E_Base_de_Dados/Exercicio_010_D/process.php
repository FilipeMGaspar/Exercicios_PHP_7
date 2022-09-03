<?php
    require_once "configs/liga.php";

    $type = filter_input(INPUT_POST, "type");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpassword");
    
    if($type === "login" || $type === "signup") {

        if($type === "login") {

            $stmt = $conn->prepare("SELECT 	idUsers, email, email FROM utilizadores");

            try {
                $stmt->execute();
                //$_SESSION["msg"] = "Dados registados com sucesso";
                //$_SESSION["type"] = "sucesso";
                header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
            } catch (Exception $e){
                $error = $e->getMessage();
               // $_SESSION["msg"] = "Não foi possivel registar os dados!";
               // $_SESSION["type"] = "erro";
            }

            echo $type;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $pass;
        }
    
        if($type === "signup") {
            echo $type;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $pass;
            echo "<br>";
            echo $confirmPass;
        }

    } else {
        // $_SESSION["msg"] = "Formulário desconhecido!";
        header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona a página
    }
  