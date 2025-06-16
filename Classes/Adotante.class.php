<?php
class Adotante {
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $animalAdotado;

    public function exibirAdotante() {
        $animal = $this->animalAdotado ? $this->animalAdotado->apresentar() : 'Nenhum animal adotado.';
        return "Nome: {$this->nome} <br>
                Idade: {$this->idade} <br>
                Telefone: {$this->telefone} <br>
                E-mail: {$this->email} <br>
                Endereço: {$this->endereco} <br>
                Tem outros animais? " . ($this->temOutrosAnimais ? 'Sim' : 'Não') . "<br>
                Experiência com pets: {$this->experienciaComPets} <br>
                Animal adotado: <br> {$animal}<br><br>";
    }

    public function adotarAnimal($animal) {
        $this->animalAdotado = $animal;
    }

    public function verificarIdade() {
        return "Verificação de idade: " . ($this->idade >= 18 ? "Apto para adoção" : "Menor de idade — não pode adotar") . "<br><br>";
    }

    public function temExperiencia() {
        return "Tem experiência? " . (!empty($this->experienciaComPets) ? "Sim" : "Não") . "<br><br>";
    }

    public function listarContato() {
        return "Contato: Telefone: {$this->telefone} | E-mail: {$this->email} <br><br>";
    }

    public function verificarOutrosAnimais() {
        return "Possui outros pets? " . ($this->temOutrosAnimais ? "Sim" : "Não") . "<br><br>";
    }

    public function cancelarAdocao() {
        $this->animalAdotado = null;
        return "Adoção cancelada.<br><br>";
    }

    public function resumoAdotante() {
        $animalNome = $this->animalAdotado ? $this->animalAdotado->nome : 'Nenhum animal';
        return "Resumo: Adotante: {$this->nome}, Animal: {$animalNome} <br><br>";
    }
}