<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP 7 utilizando Mysqli</title>

    <!-- CSS projeto -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">       
        <div class="formbx">            
            <form action="regista.php" method="post">
                <h2>Registo de utilizador</h2>

                <input type="hidden" name="tipoform" value="registar">
                
                <div class="inputs">
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                </div>

                <div class="inputs">
                    <input type="text" name="lastname" id="lastname" placeholder="Sobrenome" required>
                </div>

                <div class="inputs">
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                </div>

                <div class="inputs">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                
                <div class="inputs">
                    <input type="password" name="confirmpass" id="confirmpass" placeholder="Repita a Password" required>
                </div>

                <div class="inputs">
                    <input type="submit" value="Registar">
                </div>
                <?php if(!empty($_SESSION["msg"])): ?>    
                <p class="msg erro"><?= $_SESSION["msg"] ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <?php
        session_unset();
        session_destroy();
    ?>
</body>
</html>