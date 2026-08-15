<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ação</title>
</head>
<body class="fundo">
    <div class="fontes">
    <?php
    $nome = $_POST['nome'];
    echo "Bem vindo, $nome!";
    echo '<br>';
    ?></div>
    
    <div class="fontes">
    <?php
    $idade = $_POST['idade'];
    echo "Sua idade é: $idade";
    echo '<br>';
    ?></div>
    <div class="fontes">
    <?php
        $profissao = $_POST['profi'];
        echo "Sua profissão é: $profissao";
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
        echo "Suas experiências : $experiencia";
        echo '<br>';
    ?>
    </div>
    <div class="fontes">
    <?php
        echo "Obrigado pelo cadastro, $nome! Seu interesse na vaga de $profissao foi registrado. Sua experiência informada foi: $experiencia.";
    ?>
    </div>
    <input name="Voltar" type="submit" id="voltar" value="Voltar" onclick="window.location.href='request.html'">
</body>
</html>
