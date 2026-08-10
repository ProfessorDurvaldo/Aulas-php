<?php
    session_start();
    $email = "meunome@gmail.com";
    $senha = "wer6";
    $emailDigitado = $_POST['email'];
    $senhaDigitada = $_POST['senha'];

    if ($email == $emailDigitado && $senha == $senhaDigitada) {
        // Pode ir para dashboard
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = "Durvaldo";
        header("location: dashboard.php");
    } else {
        // Volta para tela de login
        $_SESSION['erro'] = 'Usuario ou senha Invalidos!';
        header("location: formulario.php");
    }
?>

