<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e Base de Dados - Exercício 010 A</title>
    <!-- CSS projeto -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="formBx">
            <form action="regista.php" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
                <label for="servico">Serviço: </label>
                <input type="text" name="servico" id="servico" placeholder="Serviço" required><br>
                <label for="custo">Valor: </label>
                <input type="number" name="custo" id="cust" value="0" min="0" step="0.1" required><br>
                <input type="submit" value="Registar">
            </form>
        </div>
    </div>
</body>
</html>