<?php
class Animal {
    public $nome; 
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado;

    public function apresentar() {
        return "{$this->nome} <br> {$this->especie} <br> {$this->idade} <br> {$this->sexo} <br> {$this->peso} <br> {$this->cor} <br> {$this->status} <br> {$this->chipado} <br>";
    }

    public function exibirFicha() {
        return $this->apresentar();
    }

    public function atualizarPeso($peso) {
        $this->peso = ("$peso) <br>");
    }

    public function alterarStatus($novoStatus) {
        $this->status =(" $novoStatus <br>");
    }

    public function verificarIdade() {
        if ($this->idade <= 1) {
            return "Filhote <br>";
        } elseif ($this->idade <= 7) {
            return "Adulto <br>";
        } else {
            return "Idoso <br>";
        }
    }

    public function marcarComoChipado() {
        $this->chipado = "Sim <br>";
    }

    public function desmarcarChipado() {
        $this->chipado = "Não <br>";
    }

    public function resumoAnimal() {
        return "Nome: {$this->nome}, Espécie: {$this->especie}, Status: {$this->status}<br>";
    }

    public function verificarSexo() {
        return ("$this->sexo<br>");
    }
}
?>