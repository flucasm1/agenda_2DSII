<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Ação</title>
</head>
<body class="fundo">
    <h2 class="w3-container w3-teal">Resultado do Cadastro</h2>
    <div class="fontes">
    <?php
    $nome = $_POST['nome'];
    echo "Bem vindo, $nome!";
    echo '<br>';
    ?></div>
    
    <div class="fontes">
    <?php
    $idade = $_POST['idade'];
    echo "Você tem $idade anos";
    echo '<br>';
    ?></div>
    <div class="fontes">
    <?php
        $profissao = $_POST['profi'];
        echo "Atua como $profissao";
        echo '<br>';
    ?> </div>
    <div class="fontes">
    <?php
        $salario = $_POST['sal'];
        echo "Seu salário desejado é: $salario";
        echo '<br>';
    ?>
    </div>
    <div class="fontes">
    <?php
        $experiencia = $_POST['exp'];
        echo "Suas experiências: $experiencia";
        echo '<br>';
    ?>
    </div>
    <div class="fontes">
    <?php
        if($idade >= 18){
            echo "Obrigado pelo cadastro, $nome! Seu interesse na vaga de $profissao foi registrado.";
            echo '<br>';
            echo "Sua experiência e salário desejado foram anotados para análise.";
        }
        else{
           echo "Você não tem idade suficiente para se candidatar a esta vaga.";
        }
    ?>
    </div>
    </div>
    <input name="Voltar" type="submit" class="w3-btn w3-teal" value="Voltar" onclick="window.location.href='request.html'">
</body>
</html>
