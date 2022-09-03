<?php
    require_once "configs/liga.php";

    $type = filter_input(INPUT_POST, "type");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpassword");
    
    if($type === "login" || $type === "signup") {

        if($type === "login") {

            $stmt = $conn->prepare("SELECT 	idUsers, email, email FROM utilizadores WHERE email = ? LIMIT 1");
            $stmt->bind_param("s", $email);

            try {
               
                $stmt->execute();
               
            } catch (Exception $e){
                $error = $e->getMessage();
               // $_SESSION["msg"] = "Não foi possivel registar os dados!";
               // $_SESSION["type"] = "erro";
            }

            $dados = $stmt->get_result();

            if($dados->num_rows > 0) {
                print_r($dados);
            } else {
                
                print_r($dados);

                echo "<br><br> Conta não encontrada!";
                echo "<br>";
                echo $type;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $pass;
            }
           

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
  