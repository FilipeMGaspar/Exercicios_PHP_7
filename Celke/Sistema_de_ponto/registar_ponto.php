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
    $query_ponto = "SELECT id AS id_ponto, saida_intervalo, retorno_intervalo, saida FROM pontos WHERE usuario_id=:usuario_id ORDER BY id DESC LIMIT 1"; // No máximo 1 registo

    //Preparar a Query
    $result_ponto = $conn->prepare($query_ponto);

    // subtituir o link da query pelo valor
    $result_ponto->bindParam(":usuario_id", $id_usuario);

    //Executar a Query
    $result_ponto->execute();

    //Verificar se encontrou algum registo na base de dados
    if(($result_ponto) && ($result_ponto->rowCount() != 0)){
        //Realizar a leitura do registo
        $row_ponto = $result_ponto->fetch(PDO::FETCH_ASSOC);
        var_dump($row_ponto);

        // Extrair para imprimir através do nome da chave no array
        extract($row_ponto);

        // verificar se o utilizador já deu saida para o interbvalo 
        if (($saida_intervalo == "") || ($saida_intervalo == null)) {
            $col_tipo_registo = "saida_intervalo"; // nome da coluna a modificar
            $tipo_registo = "editar"; // ação a ser efetuda na tabela
            $text_tipo_registo = "Saida para intervalo"; // Texto a ser apresentado ao utilizador 
        } elseif (($retorno_intervalo == "") || ($retorno_intervalo == null)) { // Verifica se o utilizador deu entrada/retorno do intervalo
            $col_tipo_registo = "retorno_intervalo"; // nome da coluna a modificar
            $tipo_registo = "editar"; // ação a ser efetuda na tabela
            $text_tipo_registo = "Retorno do intervalo"; // Texto a ser apresentado ao utilizador 
        } elseif (($saida == "") || ($saida == null)) { // Verifica se o utilizador deu saida 
            $col_tipo_registo = "saida"; // nome da coluna a modificar
            $tipo_registo = "editar"; // ação a ser efetuda na tabela
            $text_tipo_registo = "Saida"; // Texto a ser apresentado ao utilizador 
        } else { // Cria novo registo na base de dados com horário de entrada, se o utilizador não possuir nenhum registo de entrada
        
            $tipo_registo = "entrada"; // ação a ser efetuda na tabela
            $text_tipo_registo = "Entrada"; // Texto a ser apresentado ao utilizador 
        }

    } else {
        echo "Não foi encontardo nenhum registo de ponto!";
    }

    // Verificar o tipo de registo de NOVO PONTO ou EDITAR registo existente
    switch($tipo_registo) {
        //Acessa o case quando deve editar o registo
        case "editar" :
            // query paraeditar na base de dados
            $query_horario =  "UPDATE pontos SET $col_tipo_registo=:horario_atual WHERE id=:id LIMIT 1"; // no máximo afeta um registo

            //Prepara a query;
            $cad_horario = $conn->prepare($query_horario);

            // subtituir o link da query pelo valor
            $cad_horario->bindParam(":horario_atual", $horario_atual);

             // subtituir o link da query pelo valor
             $cad_horario->bindParam(":id", $id_ponto);
        break;

        default:
            // Query para adicionar registo na base da dados
            $query = "INSERT INTO pontos (data_entrada, entrada, usuario_id) VALUES (:data_entrada, :entrada, :usuario_id)";
        break;
    }

    //Execução da query
    $cad_horario->execute();

    // Acessa o if quando registo efectudao com sucesso
    if($cad_horario->rowCount()){
        echo "<p style='color: green;'>Horário de $text_tipo_registo registado com sucesso!</p>";
    } else {
        echo "<p style='color: #f00;'>Horário de $text_tipo_registo não foi registado!</p>";
    }