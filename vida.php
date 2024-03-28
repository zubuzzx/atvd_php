<?php

require_once('Humano.class.php');

$humano = new Humano("Estevao", 3.5, "Masculino");

$humano->MostrarDados();
$humano->FazerAniversario();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->FazerAniversario();
$humano->Comer();
$humano->MostrarDados();


?>