<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO carros (marca, modelo, ano, quilometragem, preco, opcionais)
                            VALUES (:marca, :modelo, :ano, :km, :preco, :opcionais)");
    $stmt->execute([
        ':marca' => $_POST['marca'],
        ':modelo' => $_POST['modelo'],
        ':ano' => $_POST['ano'],
        ':km' => $_POST['quilometragem'],
        ':preco' => $_POST['preco'],
        ':opcionais' => $_POST['opcionais'],
    ]);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Cadastrar Carro</h1>

    <form method="POST" onsubmit="return validarFormulario()">
        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Ano</label>
            <input type="number" name="ano" class="form-control" min="1950" max="2100" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Quilometragem</label>
            <input type="number" name="quilometragem" class="form-control" min="0" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço (R$)</label>
            <input type="number" step="0.01" name="preco" class="form-control" min="0" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opcionais</label>
            <input type="text" name="opcionais" class="form-control" placeholder="Ex: Ar-condicionado, Multimídia">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="assets/js/validacao.js"></script>
</body>
</html>
