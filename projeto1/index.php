<?php

require_once('classes/Usuario.class.php');

$usuario = new Usuario();
$tabela = $usuario->Listar();

print_r($tabela);



?>