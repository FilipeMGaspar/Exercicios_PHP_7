<?php
    //Definição do fuso horário padrão 
    date_default_timezone_set("Europe/Lisbon");


    // Gerar com PHP o horário atual
    $horario_atual = date("H:i:s");

    var_dump($horario_atual);