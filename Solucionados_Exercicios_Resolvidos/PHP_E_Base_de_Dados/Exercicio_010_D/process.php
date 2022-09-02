<?php

    $type = filter_input(INPUT_POST, "type");
    $email = filter_input(INPUT_POST, "email");
    $pass = filter_input(INPUT_POST, "password");
    $confirmPass = filter_input(INPUT_POST, "confirmpassword");
    
    if($type === "login") {
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