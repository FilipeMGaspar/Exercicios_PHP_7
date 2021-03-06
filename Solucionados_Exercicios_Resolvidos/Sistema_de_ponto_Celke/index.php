<?php
    session_start(); // Iniciar sessão

        //Definição do fuso horário padrão 
    	date_default_timezone_set("Europe/Lisbon");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de ponto para cadastrar horário de entrada e saída com PHP - Celke</title>
</head>
<body>
    <h2>Registar Ponto</h2>

    <?php
         if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
         }
    ?>

    <p id="horario"><?php echo date("d/m/Y - H:m:s") ?></p>
    <a href="registar_ponto.php">Registar</a>

    <script src="JS/script.js"></script>
</body>
</html>