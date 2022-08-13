<?php
    session_start();
    /*  Modificado para utilizar formulário em html 5

        Utilizando a base de dados. .: praticaphp.
	    Insira os seguintes dados na tabela ..: fornecedores :.. utilizando o mysqli, deve utilizar o prepare e bind_param.

        codigo	        4	                     5	                       6
        nome	      Guilherme	              Cristina	                Filipe
        email	    guigu@gmail.com	        nita@gmail.com	        filipe@gmail.com			

    */ 
    require_once "configs/liga.php";
    require_once "regista.php";
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 010 | PHP e Base de dados</title>
    <!-- CSS Projeto -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Inserindo fornecedores</h2>
        <div class="formulario">
            <form action="regista.php" method="post">
                    <label for="nome">Nome: </label>
                    <input type="text" placeholder="Nome" id="nome" name="nome" required><br>
                    <label for="email">E-mail: </label>
                    <input type="email" placeholder="E-Mail" id="email" name="email" required><br>
                    <label for="descricao">E-mail: </label>
                    <input type="text" placeholder="Descrição" id="descricao" name="descricao" required><br>
                    <input type="submit" value="Registar">
            </form>
            <div class="mensagens <?php echo $_SESSION["tipo"]; ?>">
                <p><?= $_SESSION["msg"]?></p>
            </div>
        </div>
    </div>
</body>
</html>