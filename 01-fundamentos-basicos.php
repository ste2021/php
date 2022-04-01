<?php

// comentarios de 1 linha

/*
comentários de
varias linhas

*/

//variáveis
$nome = "JULIO LEMOS";
$idade = 18;
$altura = 1.7;

echo "Meu nome é {$nome}, minha idade é $idade e minha e=altura é $altura <BR>";

$nome = "JOSÉ SILVA";
$idade = 58;
$altura = 1.9;

echo "Meu nome é {$nome}, minha idade é $idade e minha e=altura é $altura";
echo "<hr>";

// nomes de variáveis
$nome;
$carro10;
$meuCarro;
$meucarro;
$meu_carro;

//nomes inválidos
//$10nomes;
//$carro%&;,
//$nome projeto
//case sensitive
$meuNome = "JULIO";
$meunome = "Lemos";

print $meuNome."<br>";
print $meunome."<br>";

// variáveis de variáveis
$bebida = "refrigerante";
$$bebida = "guaraná";

echo $refrigerante;
echo "<br>";