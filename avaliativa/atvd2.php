<?php
class Veiculo{
 
 private $marca;
 private $modelo;
 private $ano;
 private $cor;
 private $preco_zero;
 public $idade = 0;
 public $VD = 0;

 public function __construct(string $marca, string $modelo, int $ano, string $cor, int $preco_zero){
     $this->marca = $marca;
     $this->modelo = $modelo;
     $this->ano = $ano;
     $this->cor = $cor;
     $this->preco_zero = $preco_zero;
 }

 public function ExibirDadosCarro(){
     echo "================================<br>
     Marca: $this->marca<br>
     Modelo: $this->modelo<br>
     Ano: $this->ano<br>
     Cor: $this->cor<br>
     Preço carro zero: $this->preco_zero<br>
     ================================<br>";
 }

 public function Calcularidade(){
    $this->idade = (2024 - $this->ano); 
    echo "idade do carro: $this->idade anos<br>
    ================================<br>";
 }

 public function calcularDepreciacao(){
    $this->VD = ((2024 - $this->ano) * 430) + 2100;
    echo "valor de depreciação: $this->VD<br>
    ================================<br>";
 }

 public function ehNovo(){
    if ($this->idade > 2 ) {
        echo "carro antigo <br>";
    } else {
        echo "carro novo <br>";
    };
    echo "================================<br>";
 }

 public function pintarVeiculo($novaCor){
    $this->cor = $novaCor; 
 }

}

?>