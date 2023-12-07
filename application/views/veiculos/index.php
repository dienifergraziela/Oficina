<!DOCTYPE html>
<html>
<head>
    <title>Lista de Veículos</title>
</head>
<body>
    <h2>Veículos Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Cor</th>
        </tr>
        <?php foreach ($veiculos as $veiculo): ?>
            <tr>
                <td><?= $veiculo['id'] ?></td>
                <td><?= $veiculo['marca'] ?></td>
                <td><?= $veiculo['modelo'] ?></td>
                <td><?= $veiculo['ano'] ?></td>
                <td><?= $veiculo['cor'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
