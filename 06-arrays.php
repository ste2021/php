<?php

//variáveis
$carro1 = "BMW";
$carro2 = "VELOSTER";
$carro3 = "HILUX";

//array
$carros = array("BMW", "VELOSTER", "HILUX");
echo "<pre>";
var_dump($carros);
echo "</pre>";

echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<br>";

//escolhendo seu próprio índice
$carros = NULL;
$carros = array(2 => "BMW", 8 => "VELOSTER", 10 => "HILUX");
echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<br>";

//Inserindo um elemento no vetor
$carros[] = "AMAROK";
echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<br>";


$carros[15] = "CAMARO";
echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<br>";

/////////////////////////////////////
//Outra forma de declarar um vetor
$motos = array();
$motos[] = "YAMAHA";
$motos[] = "HONDA";

echo "<pre>";
print_r($motos);
echo "</pre>";

echo "<br>";

//Outra forma de declarar um vetor
$clientes = ["ANTONIO","BENTO","FABIO"];

echo "<pre>";
print_r($clientes);
echo "</pre>";

echo "<hr>";

/*
    FUNÇÕES ARRAYS
*/

$totalClientes = count($clientes);
echo "O total de clientes é: $totalClientes";
echo "<hr>";

//percorrer um vetor
//foreach

foreach($clientes as $cliente){
    echo $cliente."<br>";
}
echo "<hr>";

//Arrays associativos
$pessoas = array("nome" => "Julio", "idade" => 18, "altura" => 2.1);
//echo $pessoas["cidade"];  índice não existe

//percorrer um vetor associativo
foreach($pessoas as $chave => $valor){
    echo $chave." : ".$valor."<br>";
}

//arrays multidimensionais
$estados = array(
    "SÃO PAULO",
    "MINAS GERAIS",
    "RIO DE JANEIRO"
);
echo $estados[2];

$estados = array(
    "SÃO PAULO" => array("são paulo","guarulhos", "campinas"),
    "MINAS GERAIS" => array("Belo Horizonte", "Uberlândia", "Contagem"),
    "RIO DE JANEIRO" => array("Rio de janeiro", "São Gonçalo", "Duque de caxias")
);
 
echo "<pre>";
print_r($estados);
echo "</pre>";