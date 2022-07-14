<?php
    //Definição do fuso horário padrão 
    date_default_timezone_set("Europe/Lisbon");


    // Gerar com PHP o horário atual
    $horario_atual = date("H:i:s");
    var_dump($horario_atual);

    // Gerar data com PHP da mesma forma que deve ser guardado na base de dados Ano/Mês/Dia
    $data_entrada = date("Y/m/d");

    // Incluir a conexão á base de dados 
    require_once "config/conecao.php";

    // ID do usuario fixo para testar
    $id_usuario = 1;

    //Recuperar o ultimo ponto do usuario
    