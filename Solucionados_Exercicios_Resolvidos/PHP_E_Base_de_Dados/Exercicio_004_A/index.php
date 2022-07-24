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
  $host = "localhost";
  $user  = "root";
  $pass = "";
  $db = "contas";

  $conn = new mysqli($host, $user, $pass, $db);

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES ('EDP', 'Eletricidade', 45.56)";
  $conn->query($query);

  $query = "INSERT INTO cobradores (nome, servico, custo) VALUES ('NOWO', 'Tel +TV + NET + TLM', 40)";
  $conn->query($query);

  $nome = "SMAS_CB";
  $servico = "";
  $query = "INSERT INTO cobradores (nome, servico, susto) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssd", "SMASCB", "Água e Saneamento", 27.89);
  $stmt->execute();

  //Fecha a ligação á base de dados Mysql
  $conn->close();