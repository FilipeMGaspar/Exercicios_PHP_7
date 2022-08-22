<?php
 class Mensagens {
    
    private $msg;
    private $type;

    private function setMsg($mensagem) {
      $this->msg = $mensagem;
    }

    public function getMsg() {
      return $this->msg;
    }

    private function setType($tipo) {
      $this->type = $tipo;
    }

    public function getType() {
      return $this->type;
    }

    public function registaMsgs($txtMsg, $tipoOp) {
      $this->setMsg($txtMsg);
      $this->setType($tipoOp);
    }

 }