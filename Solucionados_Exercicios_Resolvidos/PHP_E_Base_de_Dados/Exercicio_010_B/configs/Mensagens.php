<?php
 class Mensagens {
    
    private $msg;
    private $type;

    public function setMsg($mensagem) {
      $this->msg = $mensagem;
    }

    public function getMsg() {
      return $this->msg;
    }

 }