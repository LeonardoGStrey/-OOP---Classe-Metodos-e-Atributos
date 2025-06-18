<?php
class Animal {
    public $nome;
    public $especie;

    public function apresentar() {
        return "Nome: {$this->nome} <br>Espécie: {$this->especie}<br>";
    }
}


class Cachorro extends Animal {
    public $raca;

    public function latir() {
        return "{$this->nome} está latindo: Au Au!<br>";
    }

    public function apresentarCachorro() {
        return $this->apresentar() . "Raça: {$this->raca}<br>";
    }
}

?>