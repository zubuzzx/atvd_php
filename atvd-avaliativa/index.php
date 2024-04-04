<?php

require_once('class/Produtos_class.php');

$produtos = new Produtos();

$produtos->nome = "Sabão em pó";
$produtos->preco = 20;
$produtos->quantidade = 177;
$produtos->id_categoria = 1;
$produtos->id_fornecedor = 1;

echo $produtos->Cadastrar();

?>