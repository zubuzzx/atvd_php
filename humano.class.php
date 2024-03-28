<?php

class Humano{

    // Atributos:
    private $nome;
    private $idade;
    private $peso;
    private $sexo;
    private $vitalidade;
    private $emocao;
    private $doenca;

    public function __construct($nome, $peso, $sexo){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->sexo = $sexo;
        
        // Valores predefinidos:
        $this->doenca = "Nenhuma";
        $this->idade = 0;
        $this->vitalidade = 100;
        $this->emocao = "Bolado";
    }

    private function CalcularDoenca() {
        $doencas = ["Dengue", "Covid", "Resfriado", "Conjuntivite", "Alergia"];
        if(rand(0, 100)>=80){
            $this->doenca = $doencas[rand(0,count($doencas)-1)];
            $this->vitalidade -= 20;
            $this->emocao = "Desanimado";
        }else{
            $this->doenca = "Nenhuma";
        }
    }

    public function MostrarDados(){
        echo "Nome: $this->nome<br>
        Idade: $this->idade<br>
        Peso: $this->peso<br>
        Sexo: $this->sexo<br>
        Vitalidade: $this->vitalidade<br>
        Doença: $this->doenca<br>
        Emoção Atual: $this->emocao<br>
        ================================<br>";
    }

    public function FazerAniversario(){
        $this->CalcularDoenca();
        $this->idade++;
    }

    public function Comer(){
        $this->CalcularDoenca();
        $this->emocao = "Feliz";
        $this->peso++;
        $this->vitalidade++;
    }

    public function Trabalhar() {
        $this->CalcularDoenca();
        $this->vitalidade--;
        $this->emocao = "Exausto";
        $this->peso-=3;
    }

    public function Exercitar(){
        $this->peso -= 2;
        $this->emocao = "Brabo";
    }



}

?>