<?php

require_once('atvd1.php');
require_once('atvd2.php');

$Pessoa1 = new Pessoa("Gustavo", 19, "programador");
$Pessoa2 = new Pessoa("Pedro", 19, "hacker");

$Veiculo = new Veiculo('Fiat', 'toro', 2011, 'preto', 2000);
//atividade 1 pessoa
$Pessoa1->ExibirDadosPessoa();
$Pessoa2->ExibirDadosPessoa();
//atividade 2 carro
$Veiculo->ExibirDadosCarro();
$Veiculo->Calcularidade();
$Veiculo->calcularDepreciacao();
$Veiculo->ehNovo();
$Veiculo->pintarVeiculo("vermelho");
$Veiculo->ExibirDadosCarro();
?>