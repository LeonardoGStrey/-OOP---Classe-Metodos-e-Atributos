<?php
require_once 'Animal.class.php';

class Gato extends Animal {
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function _construct($nome, $idade, $sexo, $peso, $cor, $pelagem, $castrado = false, $independente=5, $vacinado = false, $curioso = false, $adoraColo = false, $usaCaixaAreia = false) {
        $this->nome= $nome;
        $this->especie="Gato";
        $this->idade = $idade;
        $this->sexo = $sexo; 
        $this->peso= $peso;
        $this->cor=$cor;
        $this->status = "Disponível";
        $this->chipado = false;

        $this->pelagem = $pelagem;
        $this->castrado = $castrado;
        $this->independente = $independente;
        $this->vacinado = $vacinado;
        $this->curioso = $curioso;
        $this->adoraColo = $adoraColo;
        $this->usaCaixaAreia = $usaCaixaAreia;
    } 

    public function exibirGato() {
        return parent::apresentar() . "
                Pelagem: {$this->pelagem} <br>
                Castrado: " . ($this->castrado ? 'Sim' : 'Não') . "<br>
                Independência: {$this->independente} <br>
                Vacinado: " . ($this->vacinado ? 'Sim' : 'Não') . "<br>
                Curioso: " . ($this->curioso ? 'Sim' : 'Não') . "<br>
                Adora Colo: " . ($this->adoraColo ? 'Sim' : 'Não') . "<br>
                Usa Caixa de Areia: " . ($this->usaCaixaAreia ? 'Sim' : 'Não') . "<br>";
    }

    public function castrar() {
        $this->castrado = true;
    }

    public function verificarPelagem() {
        return $this->pelagem;
    }

    public function atualizarIndependencia($grau) {
        $this->independente = $grau;
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function resumoGato() {
        return "<br> Nome: {$this->nome}, Pelagem: {$this->pelagem}, Status: " . ($this->castrado ? 'Castrado' : 'Não Castrado');
    }

    public function ensinarCaixaAreia() {
        $this->usaCaixaAreia = true;
    }

    public function verificarContato() {
        return $this->adoraColo ? "<br> Aceita colo" : "Não aceita colo";
    }
}
?>