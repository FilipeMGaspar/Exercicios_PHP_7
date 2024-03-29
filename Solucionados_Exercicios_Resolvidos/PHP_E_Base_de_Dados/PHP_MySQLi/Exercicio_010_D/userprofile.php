<?php
    session_start();

    require_once "configs/liga.php";    
    $id = $_GET["id"];

    $stmt = $conn->prepare("SELECT email, password FROM utilizadores WHERE  idUsers = ? LIMIT 1");
    $stmt->bind_param("s", $id);
    
    try {
        $stmt->execute();
        $dados = $stmt->get_result();
        $resultado = $dados->fetch_assoc();
    } catch (Exception $e){
        $error = $e->getMessage();
    } 

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e Base de Dados - Exercício 010 D</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css Projeto -->
    <link rel="stylesheet" href="css/userprofile.css">

</head>
<body>
   <div class="card">
        
        <div class="msg">
            <p class="logOut"><a href="logout.php"> Sair <i class="fa-solid fa-right-to-bracket"></i></a></p>
            <?php if(!empty($_SESSION["msg"])): ?>
            <p class="<?= $_SESSION["tipo"] ?>"><?= $_SESSION["msg"] ?></p>
            <?php endif; ?>
        </div>

        <div class="imgBx">
            
            <img src="images/woman_img01.jpg" alt="">
        </div>

        <div class="content">
            <div>
                <h3>Maureen Smith<br><span>Creative Designer</span></h3>
                <p><strong>Email:</strong> <?= $resultado["email"] ?></p>

                <ul class="sci">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

   </div> 

   <?php 
        if(!empty($_SESSION["msg"])) {
            $_SESSION["msg"] = "";
            $_SESSION["tipo"] = "";
        }

        session_unset();

        unset($stmt);
        unset($conn);
   ?>
</body>
</html>