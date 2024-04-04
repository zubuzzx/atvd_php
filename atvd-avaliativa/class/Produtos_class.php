<?php

require_once('Banco_class.php');

class Produtos
{

    // Atributos:

    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $id_categoria;
    public $id_fornecedor;


    // Métodos:
    public function Cadastrar()
    {
        $sql = "INSERT INTO produtos(nome, preco, quantidade, id_categoria, id_fornecedor) VALUES (?,?,?,?,?)";
        $conexao = Banco::conectar();
        // Converter o comando sql (string) em um objeto:
        $comando = $conexao->prepare($sql);
        //executar o comando:
        //essa parte esta dando erro por ter uma chave estrangeira
        $comando->execute([$this->nome, $this->preco, $this->quantidade, $this->id_categoria, $this->id_fornecedor]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        // Retornar a qtd de linhas cadastradas:
        return $linhas;
    }
    public function Apagar(){
        $sql = "DELETE FROM usuarios WHERE id = ?";

    }
}

?>