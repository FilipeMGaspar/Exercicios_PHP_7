<?php
     require_once "configs/liga.php";

     $conn->close();
     unset($conn);
     unset($stmt);


     $_SESSION["msg"] = "Logout efectuado com sucesso!"; 
     $_SESSION["tipo"] = "sucesso";
     header("Location: " . "index.php"); // Redireciona a página