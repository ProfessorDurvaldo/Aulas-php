<?php
    session_start();
    $id = $_GET['id'];

    // dados do banco de dados
    $host       = 'localhost';
    $dbName     = 'financas';
    $dbUser     = 'root';
    $dbPassword = '';

    // conectando ao banco de dados
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbName;charset=utf8mb4",
        $dbUser,
        $dbPassword
    );

    if ($_SESSION['id'] != $id) {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $pdo->prepare($sql)->execute([$id]);
    }

    header('location: dashboard.php');
