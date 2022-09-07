<?php
 // Funções para o funcionamento do programa 
      
    // Função para verificar se já existe um email igual no base de dados
    function findByEmail($mail, mysqli $conet) {

        $stmt = $conet->prepare("SELECT email FROM utilizadores WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $mail);

        try {           
            $stmt->execute();           
        } catch (Exception $e){
            $error = $e->getMessage();
        }
        
        $dados = $stmt->get_result();

        if($dados->num_rows > 0) {
            return true;
        } else {
            return false;
        }

    }


    // Função para encriptar a palavra passe
    function criptoPass($passwd) { 
        $secPass = md5($passwd);
        $secPass = base64_encode($secPass);

        return $secPass;
    }

    // Função para gerar uma hash da palavra passe para  que esta seja guardada na base de dados
    function gerarPasswdHash($palavraPass) { 
        $txt = criptoPass($palavraPass);
        $hash = password_hash($txt, PASSWORD_DEFAULT);

        return $hash;
    }

    // Funçaõ que com para a password recebida do formulário com a password guardada na base de daddos
    function testaPassHash($palavraPass, $passwdHash) { 
        $testaPass = password_verify(criptoPass($palavraPass), $passwdHash);

        return $testaPass;
    }   