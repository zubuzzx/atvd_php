<?php

Class SuperHeroi{
    private $nomeReal;
    private $nomePublico;
    public $estado;
    private $poder;
    public $idade;
    private $motivoRevolta;
    private $nivelRevolta;
    private $vida;
    private $stamina;
    private $danoAtribuido;
    private $danoSofrido;

    public function__construct ($nr, $np, $mr){
        //definir valores iniciais
        $this->nomeReal = $nr;
        $this->nomePublico = $np;
        $this->motivoRevolta = $mr;

        $this->poder = 150;
        $this->vida = 150;
        $this-> = 150;
        $this->poder = 150;
        $this->poder = 150;
    }

    public function AtivarPoder(){
        $this->estado = "Modo Kali";
    }
    public function Humano(){
        $this->estado = "Modo Humano";
    }
    public function Socar(){
        $this->stamina -= 5;
        $this->danoAtribuido += 20;
        $this->vida -= 2;
    }
    public function Esquivar() {
        $this->stamina -= 10;
    }
    public function MostrarFichaFBI(){
        echo "==================================<br>
        Nome Real: $this->nomeReal <br>
        Nome Público: $this->nomePublico <br>
        Idade: $this->idade <br>
        Motivo revolta: $this->motivoRevolta <br>
        Nivel revolta: $this->nivelRevolta <br>
        HP: $this->vida <br>
        Nivel de poder: $this->poder <br>
        Inteligencia: $this->inteligencia <br>
        Stamina: $this->stamina <br>
        ==================================<br>";
    }
    public function fichaCombate(){
        echo "==================================<br>
        Estado: $this->estado <br>
        Poder: $this->poder <br>
        Vida: $this->vida <br>
        Stamina: $this->Stamina <br>
        Dano atribuido: $this->danoAtribuido <br>
        Dano Sofrido: $this->danoSofrido <br>
    }
}

?>