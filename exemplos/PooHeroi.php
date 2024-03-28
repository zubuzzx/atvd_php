<?php

require_once('SuperHeroi.php');

$superHeroi1 = new SuperHeroi();

$superHeroi1->nomeReal = "Ramakrishna";
$superHeroi1->nomePublico = "Kali Killer";
$superHeroi1->idade = 41;
$superHeroi1->motivoRevolta = "Ramakrishna foi um monge por 39 anos antes de todos do seu templo serem brutalmente mortos por forças armadas estrageiras durante uma missão, Ramakrishna foi ressucitado pela deusa KALI devido sua prece sincera e sua devoção a mesma. Agora ele atende por Kali Killer matando todos por KALI";
$superHeroi1->nivelRevolta = 100;
$superHeroi1->vida = 250;
$superHeroi1->poder = 150;
$superHeroi1->inteligencia = 100;
$superHeroi1->stamina = 200;

$superHeroi1->MostrarFichaFBI();

?>