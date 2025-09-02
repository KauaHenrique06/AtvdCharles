<html>

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <form method="POST" action="Controller.php">

        <h1>Cadastro</h1>
        <h2>Digite as informações do produto</h2>

        <label>Código</label>
        <input type="text" name="codigo">
        <label>Produto</label>
        <input type="text" name="produto">
        <label>Validade</label>
        <input type="date" name="validade">
        <label>Preço</label>
        <input type="number" step="0.01" name="preco" required>

        <button class="button-main" action="submit" value="Cadastrar">Cadastrar</button>

    </form>
</body>

</html>

<?php

echo "<script>alert('Produto cadastrado com sucesso');</script>";

?>