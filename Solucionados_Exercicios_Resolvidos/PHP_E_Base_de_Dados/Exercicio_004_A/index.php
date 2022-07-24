<?php
  /* Enunciado ...:

      Utilizando a base de dados ..: contas
      Insira os seguintes dados na tabela ..: cobradores :.. utilizando o mysqli, sem utilizar o prepare e bind_param.

      codigo	          1	                         2	                          3
      nome	        EDP	                        NOWO	                    SMASCB
      servico     Eletricidade	          TEL + TV + NET + TLM	         Água e saneamento
      custo	        45.56		                      40                          27.89
*/

  //Ligação á base de dados

use function PHPSTORM_META\type;

  $host = "localhost";
  $user  = "root";
  $pass = "";
  $db = "contas";

  $conn = new mysqli($host, $user, $pass, $db);

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES ('EDP', 'Eletricidade', 45.56)";
  $conn->query($query);

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES ('NOWO', 'Tel +TV + NET + TLM', 40)";
  $conn->query($query);

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES ('SMAS-CB', 'Agua e Saneamento', 27.89)";
  $conn->query($query);


  //Teste com prepare e bind param
  $nome = "Cepsa";
  $servico = "Botija de Gás";
  $custo = 31.56;

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssd", $nome, $servico, $custo);
  $stmt->execute();
  
  //Fecha a ligação á base de dados Mysql
  $conn->close();