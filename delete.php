<?php
require 'config.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM carros WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

header('Location: index.php');
exit;
