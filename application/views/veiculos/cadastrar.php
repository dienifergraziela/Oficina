<!-- application/views/veiculos/cadastrar.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Veículo</title>
</head>
<body>
    <h2>Cadastrar Veículo</h2>
    <form action="<?= site_url('veiculos/salvar') ?>" method="post">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>

        <label for="ano">Ano:</label>
        <input type="number" name="ano" required><br>

        <label for="cor">Cor:</label>
        <input type="text" name="cor" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
