<?php

class Pessoa{

     // Atributos:
     private $nome;
     private $idade;
     private $profissao;
 
     public function __construct(string $nome, int $idade, string $profissao){
         $this->nome = $nome;
         $this->idade = $idade;
         $this->profissao = $profissao;
     }
 
     public function ExibirDadosPessoa(){
         echo "================================<br>
         Nome: $this->nome<br>
         Idade: $this->idade<br>
         Profissão: $this->profissao<br>
         ================================<br>";
     }

}

?>