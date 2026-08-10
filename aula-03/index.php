<?php
$host       = 'localhost';
$dbName     = 'financas';
$dbUser     = 'root';
$dbPassword = '';

$pdo = new PDO(
    "mysql:host=$host;dbname=$dbName;charset=utf8mb4",
    $dbUser,
    $dbPassword
);

// simulacao
$emailDigitado = "mariana@gmail.com";
$senhaDigitada = '123';

$stmt = $pdo->query("SELECT * FROM usuarios WHERE email = '$emailDigitado' and senha = $senhaDigitada");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($usuarios);
echo "</pre>";