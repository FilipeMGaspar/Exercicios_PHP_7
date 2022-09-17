<?php
     require_once "configs/liga.php";

     $conn->close();
     unset($conn);
     unset($stmt);
     
     header("Location: " . "index.html"); // Redireciona a página