<?php
     require_once "configs/liga.php";

     $conn->close();
     unset($conn);
     unset($stmt);

     session_unset();

     header("Location: " . "index.html"); // Redireciona a página