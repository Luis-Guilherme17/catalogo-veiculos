<?php
require 'config.php';

$carros = $pdo->query("SELECT * FROM carros ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Catálogo de Veículos</h1>

    <a href="create.php" class="btn btn-primary mb-3">+ Novo Carro</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Km</th>
                <th>Preço</th>
                <th>Opcionais</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carros as $carro): ?>
            <tr>
                <td><?= $carro['id'] ?></td>
                <td><?= htmlspecialchars($carro['marca']) ?></td>
                <td><?= htmlspecialchars($carro['modelo']) ?></td>
                <td><?= $carro['ano'] ?></td>
                <td><?= number_format($carro['quilometragem'], 0, ',', '.') ?> km</td>
                <td>R$ <?= number_format($carro['preco'], 2, ',', '.') ?></td>
                <td><?= htmlspecialchars($carro['opcionais']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $carro['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="delete.php?id=<?= $carro['id'] ?>" class="btn btn-sm btn-danger"
                       onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
