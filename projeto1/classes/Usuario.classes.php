<?php

require_once('Banco.class.php');

class Usuario{

    // Atributos:

    public $id;
    public $nome_completo;
    public $email;
    public $senha;


    // Métodos:
    public function Listar(){
        $sql = "SELECT * FROM usuarios";
        $conexao = Banco::conectar();
        // Converter o comando sql (string) em um objeto:
        $comando = $conexao->prepare($sql);
        // Executa o comando:
        $comando->execute();
        // Entregar o resultado para $resultado como um array associativo:
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        // Desconectar:
        Banco::desconectar();

        return $resultado;


    }
    public function Cadastrar(){
        $sql = "INSERT INTO usuarios('nome_completo', 'email', 'senha') VALUES
        (?, ?, ?)";

    }
    public function Apagar(){
        $sql = "DELETE FROM usuarios WHERE id = ?";

    }
    public function Modificar(){
        $sql = "UPDATE usuarios SET nome_completo=?, email=?, senha=? WHERE id=?";

    }


}




?>