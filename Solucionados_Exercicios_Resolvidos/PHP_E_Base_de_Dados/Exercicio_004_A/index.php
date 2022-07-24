<?php
    /*
    Utilizando a base de dados ..: contas
    Insira os seguintes dados na tabela ..: cobradores :.. utilizando o mysqli, sem utilizar o prepare e bind_param.

    codigo	          1	                         2	                          3
    nome	        EDP	                        NOWO	                    SMASCB
    servico     Eletricidade	            TV + NET + TLM	         Água e saneamento
    custo	    45.56		                    40                          27.89

    */

//Ligação á base de dados
$host = "localhost";
$user  = "root";
$pass = "";
$db = "contas";