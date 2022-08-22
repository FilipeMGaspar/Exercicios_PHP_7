<?php
    require_once "configs/liga.php";
    require_once "configs/Mensagens.php";

    $data = $_POST;

    //print_r($data);
    $msgTxt = new Mensagens();
    $msgTxt->setMsg("Registo efetuado com sucesso!");
    echo $msgTxt->getMsg();