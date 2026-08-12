<?php 
    session_start();
    if (!isset($_SESSION['logado'])){
        $_SESSION['erro'] = 'Você não tem permissao para entrar! Logue primeiro';
        header("location: index.php");
    }

    echo "<h1>Seja bem vindo! " . $_SESSION['nome'] . "</h1>";
    echo "<h2>O seu nivel de usuario é: " . $_SESSION['nivel'] . "</h2>"
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
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
<?php if ($_SESSION['nivel'] == 'admin') { ?>
    <h3>Tabela de usuarios</h3>

    <table border="1">
        <thead>
            <tr>
                <th>nome</th>
                <th>email</th>
                <th>nivel</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['nivel'] ?></td>
                <td>
                    <a href="editar-usuario.php?id=<?= $usuario['id']?>">
                        <button>Editar</button>
                    </a>
                </td>
                <td>
                    <a href="apagar-usuario.php?id=<?= $usuario['id']?>">
                        <button>Apagar</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>