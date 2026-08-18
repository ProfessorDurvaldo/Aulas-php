<pre>
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

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $data_nascimento = $_POST['data-nascimento'];

    $query_sql = "INSERT INTO `usuarios` 
                (`nome`, `email`, `senha`, `nivel`, `data-nascimento`) 
                VALUES 
                (?, ?, ?, ?, ?);
    ";

    $pdo->prepare($query_sql)
    ->execute([$nome, $email, $senha, $nivel, $data_nascimento]);

    header("location: dashboard.php");