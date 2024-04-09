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


    public function Cadastrar()
    {
        $sql = "INSERT INTO produtos(nome, preco, quantidade, id_categoria, id_fornecedor) VALUES (?,?,?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->preco, $this->quantidade, $this->id_categoria, $this->id_fornecedor]);
        $linhas = $comando->rowCount();

        Banco::desconectar();
        return $linhas;
    }

    public function Editar(){
        $sql = "UPDATE produtos SET nome=?, preco=?, quantidade=?, id_categoria=?, id_fornecedor=? WHERE id=?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->preco, $this->quantidade, $this->id_categoria, $this->id_fornecedor]);
        $linhas = $comando->rowCount();

        Banco::desconectar();
        return $linhas;
    }

    public function Listar()
    {
        $sql = "SELECT * FROM produtos";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        Banco::desconectar();
        return $resultado;
    }

    public function Apagar(){
        $sql = "DELETE FROM produtos WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $linhas = $comando->rowCount();

        Banco::desconectar();
        return $linhas;

    }
}

?>