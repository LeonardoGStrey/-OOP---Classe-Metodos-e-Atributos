<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Gato.class.php';
include_once './Classes/Adotante.class.php';

$animal = new Animal();
$animal->nome = 'Maya';
$animal->especie = 'Mamífero';
$animal->idade = 6;
$animal->sexo = 'Fêmea';
$animal->peso = 13;
$animal->cor = 'Caramelo';
$animal->status = 'Adotado';
$animal->chipado = 'Não';

echo $animal->exibirFicha();            
$animal->atualizarPeso(14);            
$animal->alterarStatus('Disponível');  
echo $animal->verificarIdade();        
$animal->marcarComoChipado();           
echo $animal->resumoAnimal();         
echo $animal->verificarSexo();      




$c = new Cachorro();
$c->nome = 'Maya';
$c->raca = 'Viralata';
$c->porte = 'Médio';
$c->nivelEnergia = 9;
$c->vacinado =  true;
$c->vermifugado = true;
$c->sociavel = false;
$c->adestrado = false;

echo $c->exibirCachorro();        
$c->vacinar();                    
$c->socializar();                 
$c->iniciarAdestramento();       
$c->atualizarNivelEnergia(9);   
echo $c->verificarAdestramento(); 
echo $c->resumoCachorro();  



$gato = new Gato();
$gato->nome = "Cerveja";
$gato->pelagem = "Curta";
$gato->castrado = true;
$gato->independente = 7;
$gato->vacinado = false;
$gato->curioso = true;
$gato->adoraColo = true;
$gato->usaCaixaAreia = true;

echo $gato->exibirGato();               
$gato->castrar();                       
$gato->vacinar();                      
$gato->atualizarIndependencia(8);      
$gato->ensinarCaixaAreia();            
echo $gato->verificarPelagem();        
echo $gato->verificarContato();        
echo $gato->resumoGato();   


$adotante = new Adotante();
$adotante->nome = 'Carlos Silva';
$adotante->idade = 29;
$adotante->telefone = '(51) 99999-8888';
$adotante->email = 'carlos@email.com';
$adotante->endereco = 'Rua das Flores, 123 - Porto Alegre';
$adotante->temOutrosAnimais = true;
$adotante->experienciaComPets = 'Sim, já teve dois cães.';
$adotante->adotarAnimal($animal);


echo $adotante->exibirAdotante();
echo $adotante->verificarIdade();
echo $adotante->temExperiencia();
echo $adotante->listarContato();
echo $adotante->verificarOutrosAnimais();
echo $adotante->resumoAdotante();
echo $adotante->cancelarAdocao();
echo $adotante->resumoAdotante(); 
?>