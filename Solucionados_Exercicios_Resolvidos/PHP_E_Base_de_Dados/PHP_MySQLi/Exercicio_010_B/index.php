<?php
    session_start();
    /*
        Utilizando a base de dados ..: praticaphp
        Insira os dados abaixo na tabela ..: people

        idPeople        username        gender          country

            9             Josefina        f               França
            10            Mário           m               Portugal   
            11            Luisa           f               Espanha
    */
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="formBX">
            <h3>Registo de pessoas</h3>
            <form action="regista.php" method="post">
                <div class="inputs">
                    <label for="username"> Nome: </label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="inputs">
                    <label for="gender">Género: </label>
                    <select name="gender" id="gender" required>
                        <option disabled selected>Selecione</option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </div>

                <div class="inputs">
                    <label for="country">País: </label>
                    <input type="text" name="country" id="country" required>
                </div>

                <div class="inputs">
                    <input type="submit" value="Registar">
                </div>
            </form>

            <?php if(!empty($_SESSION["msg"])): ?>
            <div class="mensagens <?= $_SESSION["tipoOp"] ?>">
                <h4><?= $_SESSION["msg"] ?></h4>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
        session_unset();
    ?>
</body>
</html>