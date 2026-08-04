<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <header>
        <h1>Calculadora de Imc</h1>
    </header>
    <main>
        <form action="" method="GET">
            <div>
                <label for="altura-id">Altura (cm)</label>
                <input type="text" name="altura" id="altura-id">
            </div>
            <div>
                <label for="peso-id">Peso (kg)</label>
                <input type="text" name="peso" id="peso-id">
            </div>
            <button type="reset">Resetar</button>
            <button type="submit">Calcular</button>
        </form>
    </main>

    <?php
        if ($_GET) {
            $peso = $_GET['peso'] ?? 0;
            $altura = $_GET['altura'] ?? 0;

            if ($altura > 0 && $peso > 0) {
                $altura = $altura / 100;
                $imc = $peso / ($altura * $altura);
                $imc = round($imc, 2);
                echo "<h2>Seu Imc é: $imc</h2>";
                if ($imc < 18.5) {
                    echo "<p>Abaixo do peso</p>";
                } else if ($imc < 25) {
                    echo "<p>Peso Normal</p>";
                } else if ($imc < 30) {
                    echo "<p>Sobrepeso</p>";
                } else {
                    echo "<p>Obesidade</p>"; 
                }
            } else {
                echo "<h2>Preencha peso e altura corretamente</h2>";
            }
        }
    ?>

    <footer>
        <p>Desenvolvido com <3 2026</p>        
    </footer>
</body>
</html>