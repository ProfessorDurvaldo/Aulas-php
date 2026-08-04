<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Programa PHP</title>
</head>
<body>
    <h1>Olá mundo</h1>
    
    <?php 
        // Variavel
        // 1- sempre começa com $
        // 2- A segundo caractere pode ser letra ou _
        // 3- terceiro pode ser [a-z] [A-Z] [0-9]
        // 4- não pode ser palavras reservadas exmplo: $this, $_GET, $_POST
        $nome = "Durvaldo";
        // constante
        // 1- não coloca $
        // 2- não pode ser palavras reservadas
        const PAÍS = "Brasil";
        echo "<p> Seja bem vindo $nome!</p>";
        echo "<p> Você é do <strong>" . PAÍS . "</strong> </p>";
        
        // if e else
        $idade = -1;
        if ($idade >= 18) {
            echo "Já pode votar";
        } else if ($idade < 0 ) {
            echo "Idade invalida!";
        } else {
            echo "Ainda é de menor";
        }

        // switch
        $dia = 1;
        switch ($dia) {
            case 1:
                echo "<p> Domingo </p>";
                break;
            case 2:
                echo "<p> Segunda </p>";
                break;
            case 3:
                echo "<p> Terça </p>";
                break;
            default:
                echo "<p> Outro dia </p>";
        }

        // Ternario
        $status = ($idade >= 18) ? "Maior" : "Menor";










        // for
        echo "<h2>Loop for</h2>";
        echo "<ul>";
        for ($i = 0; $i <= 5 ; $i++) { 
            echo "<li> item de numero $i </li>";
        }
        echo "</ul>";











        
        // while
        $a = 0;
        while ($a <= 5) {
            echo "<h3> Estou dentro do 'while' repetindo na vez $a </h3>";
            $a++;
        }

        // do while
        $i = 0;
        do {
             echo "<h3> Estou dentro do 'do while' repetindo na vez $i </h3>";
             $i++;
        } while ($i <= 5);

        // foreach (sem usar o key)
        echo "<h3> Foreach 1 </h3>";
        $frutas = ['Banana', 'Maça', 'Uva', 'Pera', 'Morango'];
        foreach ($frutas as $fruta) {
                echo $fruta;
                echo '</br>';
        }

        // foreach (usando o key)
        echo "<h3> Foreach 2</h3>";
        $frutas = ['Banana', 'Maça', 'Uva', 'Pera', 'Morango'];

        foreach ($frutas as $key => $value) {
            echo "<br>";
            echo "A fruta $value está na posição $key </br>";
        }

        echo "<br>";

        $aluno = [
            'id'        => 3392,
            'Nome'      => "Durvaldo", 
            'Idade'     => 29, 
            'Curso'     => 'Engenheiro', 
            'Sexo'      => "M", 
            'Turno'     => "N", 
            'Periodo'   => 6
        ];


        foreach ($aluno as $key => $value) {
            echo $key . ' : ' . $value;
            echo '<br>';
        }
    ?>
    <?php $frutas = ['Banana', 'Maça', 'Uva', 'Pera', 'Morango'] ?>
    







    <ul>
        <?php foreach ($frutas as $key => $value) { ?>
            <li><?= $value ?></li>
        <?php } ?>
    </ul>   




















    <p>
        <?= "O que vamos fazer hoje $nome?" ?>
    </p>
</body>
</html>