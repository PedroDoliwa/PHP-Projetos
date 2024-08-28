<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="http://localhost:8081/aula4/controller/ClienteController.php" method="post">

        <label for="">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>

        <label for="">Nome da Mãe</label>
        <input type="text" name="nomeDaMae" id="nomeDaMae"><br>

        <label for="">Nome do Pai</label>
        <input type="text" name="nomeDoPai" id="nomeDoPai"><br>

        <label for="">Saldo Devedor</label>
        <input type="number" name="saldoDevedor" id="saldoDevedor"><br>


        <button type="submit">Enviar</button>
    </form>

</body>
</html>