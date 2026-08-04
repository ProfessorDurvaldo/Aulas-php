<?php 
    session_start();
    echo "<h1>Seja bem vindo! " . $_SESSION['nome'] . "</h1>";
?>

<button>Deslogar</button>