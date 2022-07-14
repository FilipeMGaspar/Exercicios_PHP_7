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
    $query_ponto = "SELECT id, saida_intervalo, retorno_intervalo, saida FROM pontos WHERE usuario_id=:usuario_id ORDER BY id DESC LIMIT 1"; // No máximo 1 registo

    //Preparar a Query
    $result_ponto = $conn->prepare($query_ponto);

    // subtituir o link da query pelo valor
    $result_ponto->bindParam(":usuario_id", $id_usuario);

    //Executar a Query
    $result_ponto->execute();

    if(($result_ponto) && ($result_ponto->rowCount() != 0)){
        $row = $result_ponto->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
    } else {

    }