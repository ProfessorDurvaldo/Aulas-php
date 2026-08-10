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

    // Pega o email e senha que o usuario digitou
    $emailDigitado = $_POST['email'];
    $senhaDigitada = $_POST['senha'];

    // Gera a query para buscar os dados não está seguro
    $sql = "SELECT * FROM usuarios 
            WHERE email = ? and senha = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$emailDigitado, $senhaDigitada]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    session_start();
    if ($usuario) {
        // Pode ir para dashboard
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $usuario['nome'];
        header("location: dashboard.php");
    } else {
        // Volta para tela de login
        $_SESSION['erro'] = 'Usuario ou senha Invalidos!';
        header("location: formulario.php");
    }
?>

