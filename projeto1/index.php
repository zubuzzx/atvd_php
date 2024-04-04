<?php

require_once('classes/Usuario.class.php');

$usuario = new Usuario();

$usuario->nome_completo = "José Soares";
$usuario->email = "jsoares@uol.com.br";
$usuario->senha = "g768h7h8gf7h6f87h";
$usuario->id = 6;

echo $usuario->Modificar();




// $usuario->id = 5;
// echo $usuario->Apagar();

// $usuario->nome_completo = "Paulo Andrade";
// $usuario->email = "pandrade@gmail.com";
// $usuario->senha = "robson_125";

// echo $usuario->Cadastrar();






// $tabela = $usuario->Listar();

// // Mostrar a tabela:
// foreach($tabela as $linha){
//     echo "Nome: ".$linha['nome_completo']."<br>
//     Email: ".$linha['email']."<br>
//     Senha: ".$linha['senha']."<br>";
// }





?>