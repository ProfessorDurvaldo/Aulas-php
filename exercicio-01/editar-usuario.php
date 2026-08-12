<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<body>
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

    // Gera a query para buscar os dados não está seguro
    $sql = "SELECT * FROM usuarios 
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <h1>Formulario de Edição</h1>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value=<?= $usuario['nome'] ?>>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value=<?= $usuario['email'] ?>>
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha" value=<?= $usuario['senha'] ?>>
        </div>
        <div>
            <label for="nivel">Nivel</label>
            <select name="nivel" id="nivel">
                <option <?= $usuario['nivel'] == 'admin' ? 'selected' : '' ?> value="admin">Administrador</option>
                <option <?= $usuario['nivel'] == 'cliente' ? 'selected' : '' ?> value="cliente">Cliente</option>
            </select>
        </div>
        <div>
            <label for="data-nascimento">Data de nascimento</label>
            <input type="date" name="data-nascimento" id="data-nascimento" value=<?= $usuario['data-nascimento'] ?>>
        </div>
        <button type="submit">Editar</button>
    </form>
</body>
</html>