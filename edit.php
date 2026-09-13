<?php
require 'config.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE carros SET marca=:marca, modelo=:modelo, ano=:ano,
                            quilometragem=:km, preco=:preco, opcionais=:opcionais
                            WHERE id=:id");
    $stmt->execute([
        ':marca' => $_POST['marca'],
        ':modelo' => $_POST['modelo'],
        ':ano' => $_POST['ano'],
        ':km' => $_POST['quilometragem'],
        ':preco' => $_POST['preco'],
        ':opcionais' => $_POST['opcionais'],
        ':id' => $id,
    ]);

    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM carros WHERE id = :id");
$stmt->execute([':id' => $id]);
$carro = $stmt->fetch();

if (!$carro) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Editar Carro</h1>

    <form method="POST" onsubmit="return validarFormulario()">
        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" value="<?= htmlspecialchars($carro['marca']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" value="<?= htmlspecialchars($carro['modelo']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Ano</label>
            <input type="number" name="ano" class="form-control" value="<?= $carro['ano'] ?>" min="1950" max="2100" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Quilometragem</label>
            <input type="number" name="quilometragem" class="form-control" value="<?= $carro['quilometragem'] ?>" min="0" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço (R$)</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="<?= $carro['preco'] ?>" min="0" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opcionais</label>
            <input type="text" name="opcionais" class="form-control" value="<?= htmlspecialchars($carro['opcionais']) ?>">
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="assets/js/validacao.js"></script>
</body>
</html>
