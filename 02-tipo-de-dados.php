<?php

/*
ESCALARES
*/
//STRING
$nome = 2;
var_dump($nome);
echo "<br>";

if(is_string($nome)):
    echo "É UMA STRING";
else:
    echo "NÃO É UMA STRING";
endif;

echo "<hr>";

//INT
$idade = 18;
var_dump($idade);
echo "<br>";

if(is_int($idade)):
    echo "é um inteiro";
else:
    echo "não é um inteiro";
endif;
echo "<hr>";

//FLOAT
$altura = 1.8;
var_dump($altura);
echo "<br>";

if(is_float($altura)):
    echo "é um float";
else:
    echo "não é um float";
endif;
echo "<hr>";

//BOOLEAN
$admin = true;  //false
var_dump($admin);
echo "<br>";

if(is_bool($admin)){
    echo "É um booleano";
}else{
    echo "Não é booleano";
}
   
echo "<hr>";

//COMPOSTOS
//array
$carros = array("Gol", "Fusca","Camaro",12, 12.7,false);
var_dump($carros);
echo "<br>";
if(is_array($carros)):
    echo "É UM ARRAY";
else:
    echo "NÃO É UM ARRAY";
endif;

echo "<hr>";

//OBJECT
class Cliente{
    private $nome;

    public function atribuirNome ($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("julio ");
var_dump($cliente);
echo "<br>";

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<br>";
//NULL
$cidade = NULL;
var_dump($cidade);