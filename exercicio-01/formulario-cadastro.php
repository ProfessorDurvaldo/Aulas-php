<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add usuario</title>
</head>
<body>
    <h1>Formulario de Cadastro</h1>
    <form action="cadastro.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">
        </div>
        <div>
            <label for="nivel">Nivel</label>
            <select name="nivel" id="nivel">
                <option value="admin">Administrador</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>
        <div>
            <label for="data-nascimento">Data de nascimento</label>
            <input type="date" name="data-nascimento" id="data-nascimento">
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>