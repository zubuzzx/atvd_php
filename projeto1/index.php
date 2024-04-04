<?php

require_once('classes/Usuario.class.php');

$usuario = new Usuario();

$usuario->nome_completo = "Robson Soares";
$usuario->email = "robs_som@gmail.com";
$usuario->senha = "987";

echo $usuario->Cadastrar();

//$tabela = $usuario->Listar();

//mostrar tabela
//foreach($tabela as $linha){
//    echo "Nome: ".$linha['nome_completo']."<br>
//    Email: ".$linha['email']."<br>
//    Senha: ".$linha['senha']."<br>";
//}



?>