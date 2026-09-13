<?php
/**
 * config.php
 * Responsável por abrir a conexão com o MySQL usando PDO.
 * Ajuste $host, $user e $senha conforme o seu ambiente (XAMPP/WAMP/Laragon).
 */

$host  = 'localhost';
$dbnome = 'catalogo_veiculos';
$usuario = 'root';
$senha   = ''; // no XAMPP/WAMP padrão, a senha do root costuma ser vazia

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbnome;charset=utf8mb4",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}
