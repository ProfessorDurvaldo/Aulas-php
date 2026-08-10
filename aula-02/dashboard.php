<?php 
    session_start();
    if (!isset($_SESSION['logado'])){
        $_SESSION['erro'] = 'Você não tem permissao para entrar! Logue primeiro';
        header("location: formulario.php");
    }

    echo "<h1>Seja bem vindo! " . $_SESSION['nome'] . "</h1>";
?>

<a href="logout.php">
    <button>Deslogar</button>
</a>

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

    $stmt = $pdo->query("SELECT * FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>

<?php if ($_SESSION['nivel'] == 'admin') { ?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Nivel</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($usuarios)) { ?>
            <tr>
                <td colspan="4">Nenhum usuário encontrado.</td>
            </tr>
        <?php } else { ?>
            <?php foreach ($usuarios as $key => $value) { ?>
                <tr>
                    <td><?= htmlspecialchars($value['nome']) ?></td>
                    <td><?= htmlspecialchars($value['email']) ?></td>
                    <td><?= htmlspecialchars($value['nivel']) ?></td>
                    <td>
                        <a href="editar.php?id=<?= (int) $value['id'] ?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>

<?php } ?>
