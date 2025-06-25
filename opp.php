<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Gato.class.php';
include_once './Classes/Adotante.class.php';


$animal = new Animal();
$animal->nome = 'Maya';
$animal->especie = 'Mamífero';
$animal->idade = 4;
$animal->sexo = 'Fêmea';
$animal->peso = 12;
$animal->cor = 'Caramelo';
$animal->status = 'Adotado';
$animal->chipado = 'Não';

echo "<h3>Animal Genérico</h3>";
echo $animal->exibirFicha();            
$animal->atualizarPeso(14);            
$animal->alterarStatus('Disponível');  
echo $animal->verificarIdade();        
$animal->marcarComoChipado();           
echo $animal->resumoAnimal();         
echo $animal->verificarSexo();      


$c = new Cachorro();
$c->nome = 'Maya';
$c->especie = 'Cachorro'; 
$c->idade = 4;             
$c->sexo = 'Fêmea';        
$c->peso = 12;             
$c->cor = 'Branco e marrom'; 
$c->status = 'Disponível'; 
$c->chipado = 'Não';    
$c->raca = 'Viralata';
$c->porte = 'Médio';
$c->nivelEnergia = 9;
$c->vacinado = true;
$c->vermifugado = true;
$c->sociavel = false;
$c->adestrado = false;

echo "<h3>Cachorro</h3>";
echo $c->exibirCachorro();        
$c->vacinar();                    
$c->socializar();                 
$c->iniciarAdestramento();       
$c->atualizarNivelEnergia(9);   
echo $c->verificarAdestramento(); 
echo $c->resumoCachorro();  


$gato = new Gato();
$gato->nome = "Cerveja";
$gato->especie = "Gato";   
$gato->idade = 3;          
$gato->sexo = 'Macho';     
$gato->peso = 5;           
$gato->cor = 'Cinza';      
$gato->status = 'Adotado';
$gato->chipado = 'Sim';    
$gato->pelagem = "Curta";
$gato->castrado = true;
$gato->independente = 7;
$gato->vacinado = false;
$gato->curioso = true;
$gato->adoraColo = true;
$gato->usaCaixaAreia = true;

echo "<h3>Gato</h3>";
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
$adotante->adotarAnimal($animal); // ou $gato ou $c

echo "<h3>Adotante</h3>";
echo $adotante->exibirAdotante();
echo $adotante->verificarIdade();
echo $adotante->temExperiencia();
echo $adotante->listarContato();
echo $adotante->verificarOutrosAnimais();
echo $adotante->resumoAdotante();
echo $adotante->cancelarAdocao();
echo $adotante->resumoAdotante(); 
?>
