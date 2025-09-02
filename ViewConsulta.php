<html>

<head>
    <title>Consulta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <form method="GET" action="Controller.php">
            <h1>Consulta</h1>
            <h2>Digite o código do produto desejado</h2>
            <label>Código</label>
            <input type="text" name="codigo">
            <button class="button-main" action="submit" value="Cadastrar">Consultar</button>
        </form>
        <div class="res-consulta">
            <?php if (isset($consulta)): ?>
                <h1>Produto encontrado:</h1>
                <h2>Nome: <?= $consulta['produto'] ?></h2>
                <h2>Preço: R$ <?= $consulta['preco'] ?></h2>
                <h2>Validade: <?= $consulta['validade'] ?? 'Não informado' ?></h2>
            <?php elseif (isset($erro)): ?>
                <p style="color: red;"><?= $erro ?></p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>