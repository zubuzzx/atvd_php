<?php
$artigos = array(
    array(
        'id_artigo' => 1,
        'titulo' => 'Introdução ao TensorFlow',
        'nome_autor' => 'João Silva',
        'corpo_artigo' => 'O TensorFlow é uma biblioteca de código aberto desenvolvida pela Google para facilitar a criação e treinamento de modelos de aprendizado de máquina. Neste artigo, vamos explorar os conceitos básicos do TensorFlow e criar um modelo simples para classificar imagens.'
    ),
    array(
        'id_artigo' => 2,
        'titulo' => 'TensorFlow vs PyTorch: Qual usar?',
        'nome_autor' => 'Maria Santos',
        'corpo_artigo' => 'TensorFlow e PyTorch são duas das bibliotecas mais populares para aprendizado de máquina. Neste artigo, vamos comparar essas duas bibliotecas em termos de facilidade de uso, desempenho e comunidade de suporte.'
    ),
    array(
        'id_artigo' => 3,
        'titulo' => 'Como usar o TensorFlow para reconhecimento de voz',
        'nome_autor' => 'Pedro Souza',
        'corpo_artigo' => 'Reconhecimento de voz é uma tarefa importante em muitas aplicações, como assistentes virtuais e carros autônomos. Neste artigo, vamos mostrar como usar o TensorFlow para criar um modelo de reconhecimento de voz com alta precisão.'
    ),
    array(
        'id_artigo' => 4,
        'titulo' => 'Usando TensorFlow para detecção de objetos em imagens',
        'nome_autor' => 'Ana Oliveira',
        'corpo_artigo' => 'Detecção de objetos em imagens é uma tarefa fundamental em muitas áreas, como vigilância e monitoramento. Neste artigo, vamos mostrar como usar o TensorFlow para criar um modelo de detecção de objetos com alta precisão.'
    )
    );

$comentarios = array(
    array(
        'nome' => 'José Benedito',
        'comentario' => 'Otimo artigo, fiquei impressionado',
    ),
    array(
        'nome' => 'Estevao Rada',
        'comentario' => 'Maravilhoso vou passar isso pros meus alunos',
    ),
    array(
        'nome' => 'Gustavo Pereira',
        'comentario' => 'ARTIGO INCRIVEL',
    ),
    array(
        'nome' => 'Bill Gates',
        'comentario' => 'ruim',
    )
    );
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Artigos</title>

    <!-- Adicionando Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra Lateral -->
            <div class="col-md-3 bg-light py-3">
                <h5>Comentários Recentes</h5>
                <?php foreach($comentarios as $c){ ?>
                <ul class="list-unstyled">
                    <li>
                        <b><?=$c['nome']; ?></b><br>
                        <?=$c['comentario']; ?>                    
                    </li>
                </ul>
                <?php } ?>
            </div>

            <!-- Listagem de Artigos -->
            <div class="col-md-9 py-3">
                <h2>Listagem de Artigos</h2>

                <!-- Com base no modelo abaixo, liste os artigos do array:  -->
                <?php foreach($artigos as $a){ ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?=$a['titulo']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?=$a['nome_autor']; ?></h6>
                        <p class="card-text"><?=$a['corpo_artigo']; ?></p>
                        <a href="ler.php?id_1">ler mais...</a>
                    </div>
                </div>

                <hr>
                <?php } ?>

                
            </div>
        </div>
    </div>

    <!-- Adicionando JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>