<?php
//variaveis
$titulo_pagina = "Listagem de Funcionários";
$funcionario_logado = "Gustavo";

$funcionarios = ["pedro", "gustavo", "estevao", "diogo", "davi", "amanda"]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo_pagina; ?> </title>
</head>
<body>
    <h1>olá <?=$funcionario_logado; ?></h1>
    <h1>espero que esteja bem</h1>

    <h3>Listagem</h3>
    <ul>
        <?php foreach($funcionarios as $nome){ ?>
            <li><?=$nome; ?></li>
        <?php } ?>
    </ul>
</body>
</html>