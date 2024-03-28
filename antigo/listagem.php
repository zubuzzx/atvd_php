<?php
// Array de funcionários
$funcionarios = array(
    array("id" => 1, "nome" => "João", "cargo" => "Gerente"),
    array("id" => 2, "nome" => "Maria", "cargo" => "Analista"),
    array("id" => 3, "nome" => "Pedro", "cargo" => "Desenvolvedor"),
    array("id" => 4, "nome" => "Lucas", "cargo" => "Estagiário"),
    array("id" => 5, "nome" => "Ana",   "cargo" => "Assistente"),
    array("id" => 6, "nome" => "Paulo", "cargo" => "Terceirizado"),
    array("id" => 7, "nome" => "Julia", "cargo"=>  "Supervisor")
);
// Array de produtos:
$produtos = array(
    array("id" => 1, "nome" => "Camiseta", "preco" => 29.99),
    array("id" => 2, "nome" => "Calça jeans", "preco" => 89.99),
    array("id" => 3, "nome" => "Tênis", "preco" => 149.99),
    array("id" => 4, "nome" => "Boné", "preco" => 19.99),
    array("id" => 5, "nome" => "Bolsa", "preco" => 79.99),
    array("id" => 6, "nome" => "Óculos de sol", "preco" => 129.99),
    array("id" => 7, "nome" => "Jaqueta", "preco" => 199.99),
    array("id" => 8, "nome" => "Saia", "preco" => 59.99),
    array("id" => 9, "nome" => "Blusa", "preco" => 39.99),
    array("id" => 10, "nome" => "Relógio", "preco" => 299.99),
    array("id" => 11, "nome" => "Shorts", "preco" => 49.99),
    array("id" => 12, "nome" => "Sapato social", "preco" => 199.99),
    array("id" => 13, "nome" => "Vestido", "preco" => 129.99),
    array("id" => 14, "nome" => "Chinelo", "preco" => 29.99),
    array("id" => 15, "nome" => "Cinto", "preco" => 39.99)
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Funcionários</h1>
    <?php foreach($funcionarios as $func){  ?>
    <ul class="list-group">
      <li class="list-group-item"><?=$func['nome']; ?> |
      <?=$func['cargo']; ?>
    </li>
    </ul>
    <?php } ?>
   
    <h1>Produtos</h1>
    
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($produtos as $p) { ?>
        <tr>
          <td><?=$p['id']; ?></td>
          <td><?=$p['nome']; ?></td>
          <td><?=$p['preco']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>