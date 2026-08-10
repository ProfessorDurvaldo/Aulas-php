<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="login.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <?php
            session_start();
            if (isset($_SESSION['erro'])) {
                echo "<p style='color:red;'>{$_SESSION['erro']}</p>";
                unset($_SESSION['erro']);
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>