<?php

class Veiculo{

    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco_zero
    
    public function __construct(string $marca, string $modelo, int $ano, string $cor, double $preco_zero){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->preco_zero = $preco_zero;
    }

    public function ExibirDadosPessoa(){
        echo "================================<br>
        Marca: $this->marca<br>
        Modelo: $this->modelo<br>
        Ano: $this->ano<br>
        Cor: $this->cor<br>
        Preço carro zero: $this->preco_zero<br>
        ================================<br>";
    }

}

?>