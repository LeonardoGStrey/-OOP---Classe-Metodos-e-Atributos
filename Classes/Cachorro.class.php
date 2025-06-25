<?php
require_once 'Animal.class.php';

class Cachorro extends Animal {
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro() {
        return parent::apresentar() . "
                Raça: {$this->raca} <br> 
                Porte: {$this->porte} <br> 
                Nível de Energia: {$this->nivelEnergia} <br> 
                Vacinado: " . ($this->vacinado ? 'Sim' : 'Não') . "<br> 
                Vermifugado: " . ($this->vermifugado ? 'Sim' : 'Não') . "<br> 
                Sociável: " . ($this->sociavel ? 'Sim' : 'Não') . "<br> 
                Adestrado: " . ($this->adestrado ? 'Sim' : 'Não') . "<br>";
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function verificarAdestramento() {
        return $this->adestrado ? "Cachorro adestrado" : "Cachorro não adestrado";
    }

    public function atualizarNivelEnergia($valor) {
        $this->nivelEnergia = $valor;
    }

    public function indicarPorte() {
        return $this->porte;
    }

    public function socializar() {
        $this->sociavel = true;
    }

    public function iniciarAdestramento() {
        $this->adestrado = true;
    }

    public function resumoCachorro() {
        return "<br> Nome: {$this->nome}, Raça: {$this->raca}, Porte: {$this->porte} <br><br>";
    }
}
?>
