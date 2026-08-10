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