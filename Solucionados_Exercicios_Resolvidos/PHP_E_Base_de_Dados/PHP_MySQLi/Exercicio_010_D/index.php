<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e Base de Dados - Exercício 010 D</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="msg">
            <?php if(!empty($_SESSION["msg"])): ?>
            <p class="<?= $_SESSION["tipo"] ?>"><?= $_SESSION["msg"] ?></p>
            <?php endif; ?>
        </div>

        <div class="title-text">
            <div class="title login">Entrar</div>
            <div class="title signup">Registar</div>
        </div>

        <div class="form-container">
            
            <div class="slide-controls">
                <input type="radio" name="slider" id="login" checked>
                <input type="radio" name="slider" id="signup">
                <label for="login" class="slide login">Entrar</label>
                <label for="signup" class="slide signup">Registar</label>
                <div class="slide-tab"></div>
            </div>

            <div class="form-inner">
                 <!-- Login form -->
                <form action="process.php" class="login" method="post"> 

                    <input type="hidden" name="type" value="login">                   
                     
                    <div class="field">
                        <input type="text" name="email" id="email" placeholder="Email Address" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="pass-link"><a href="#">Esqueceu password?</a></div>

                    <div class="field">
                        <input type="submit" value="Entrar">
                    </div>

                    <div class="signup-link">Não tem conta? <a href="#"> Registe agora</a></div>
                </form>

                <!--  Signup form -->
                <form action="process.php" class="signup" method="post">

                    <input type="hidden" name="type" value="signup">
                    
                    <div class="field">
                        <input type="text" name="email" id="email" placeholder="Email Address" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="field">
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm Password" required>
                    </div>

                    <div class="field">
                        <input type="submit" value="Registar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        if(!empty($_SESSION["msg"])) {
            $_SESSION["msg"] = "";
            $_SESSION["tipo"] = "";
        }

        session_unset();
   ?>

    <!-- javascript -->
    <script src="js/script.js"></script>
</body>
</html>