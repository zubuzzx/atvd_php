<?php

require_once('class/Produtos_class.php');

$produtos = new Produtos();

$produtos->nome = "Presunto";
$produtos->preco = 17;
$produtos->quantidade = 52;
$produtos->id_categoria = 1;
$produtos->id_fornecedor = 1;

//para cadastramento de um produto usar o comando abaixo:
//echo $produtos->Cadastrar();

//agora para edição de um produto troque as informações que deseja editar e use o comando abaixo:
//echo $produto->Editar();

//comando para listagem dos produtos já cadastrados no banco de dados:
$tabela = $produtos->Listar();
foreach($tabela as $linha){
         echo "nome do produto: ".$linha['nome']."<br>
         preco do produto: ".$linha['preco']."<br>
         quantidade em estoque: ".$linha['quantidade']."<br>
         ====================================================<br>";
}

//use esse comando para apagar:
//$produto->id = 1;
// echo $usuario->Apagar();
?>