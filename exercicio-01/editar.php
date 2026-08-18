<?php
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

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $data_nascimento = $_POST['data-nascimento'] == '' ? NULL : $_POST['data-nascimento'];

    $sql = "UPDATE `usuarios` SET 
            `nome` = ?, 
            `email` = ?, 
            `senha` = ?, 
            `nivel` = ?,
            `data-nascimento` = ? 
        WHERE `id` = $id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $nivel, $data_nascimento]);

    header('location: dashboard.php');