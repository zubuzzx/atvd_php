<?php

require_once("Banco.class.php");

class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $foto;
    public $preco;
    public $estoque;
    public $id_categoria;
    public $id_resp;

    public function CadastrarComFoto(){
        $sql = "INSERT INTO produtos (nome, descricao, foto, preco, estoque, id_categoria, id_resp) VALUES (?,?,?,?,?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->foto, $this->preco, $this->estoque, $this->id_categoria, $this->id_resp]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function CadastrarSemFoto(){
        $sql = "INSERT INTO produtos (nome, descricao, preco, estoque, id_categoria, id_resp) 
        VALUES (?,?,?,?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->preco, $this->estoque, $this->id_categoria, $this->id_resp]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Listar(){
        $sql = "SELECT * FROM produtos";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function ListarPorID(){

    }
    public function Apagar(){

    }
}


?>