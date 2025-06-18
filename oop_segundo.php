<?php
include_once './Classes/Animal_segundo.class.php';
$c = new Cachorro();
$c->nome = "Toby";
$c->especie = "Mamífero";
$c->raca = "Labrador";

// Usando métodos herdados e próprios
echo $c->apresentarCachorro();
echo $c->latir();
?>
