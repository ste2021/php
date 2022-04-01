<?php
/*
is_array(mixed $var): bool — Verifica se a variável é um array
in_array($valor, $array) - Checa se um valor existe em um array
array_keys($array) - Retorna todas as chaves ou uma parte das chaves de um array
array_values($array) - Retorna todos os valores de um array
array_merge($array1, $array2) — Combina um ou mais arrays
array_pop($array) - Extrai um elemento do final do array
array_shift($array) — Retira o primeiro elemento de um array
array_unshift($array) — Adiciona um ou mais elementos no início de um array
array_push($array, "valor","valor") — Adiciona um ou mais elementos no final de um array
array_combine($keys, $values) — Cria um array usando um array para chaves e outro para valores
array_sum() - calcula a soma dos elementos de um array
explode("/", "20/01/2001)" — Divide uma string em strings
implode("-", $array) - transforma array em string
*/

$nomes = array("Maria", "José", "Joaquim", "Rosa");

//is_array(mixed $var): bool — Verifica se a variável é um array
if(is_array($nomes)):
    echo "É um array<br>";
else:
    echo "Não é um array <br>";
endif;

echo "<hr>";



//in_array($valor, $array) - 
//Checa se um valor existe em um array
if(in_array("Julio", $nomes)):
    echo "Existe no array <br>";
else:
    echo "Não existe no array <br>";
endif;
echo "<hr>";

//array_keys($array) - 
//Retorna todas as chaves ou uma parte das chaves de um array
$precos = array("mouse"=> 10, "monitor"=>1200, "teclado"=>123.78);
echo "<pre>";
print_r($precos);
echo "</pre>";
$keys = array_keys($precos);
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_values($array) - 
//Retorna todos os valores de um array
$values = array_values($precos);
echo "<pre>";
print_r($values);
echo "</pre>";
echo "<br>";
echo "<hr>";


//array_merge($array1, $array2) — 
//Combina um ou mais arrays
$comida = array("Arroz","feijão","Bife");
$bebida = array("àgua", "Guaraná", "Cerveja");

$jantar = array_merge($comida, $bebida);
echo "<pre>";
print_r($jantar);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_pop($array) - 
//Extrai um elemento do final do array
array_pop($jantar);
echo "<pre>";
print_r($jantar);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_shift($array) — 
//Retira o primeiro elemento de um array
array_shift($jantar);
echo "<pre>";
print_r($jantar);
echo "<pre>";
echo "<br>";
echo "<hr>";

//array_unshift($array) — 
//Adiciona um ou mais elementos no início de um array
array_unshift($jantar,"macarrão");
echo "<pre>";
print_r($jantar);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_push($array, "valor","valor") — 
//Adiciona um ou mais elementos no final de um array
array_push($jantar,"cerveja","vodka");
echo "<pre>";
print_r($jantar);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_combine($keys, $values) — 
//Cria um array usando um array para chaves e outro para valores
$keys = array("fruta","carne","bebida");
$values = array("morango", "filé mignon", "cerveja");
$comer = array_combine($keys, $values);
echo "<pre>";
print_r($comer);
echo "</pre>";
echo "<br>";
echo "<hr>";

//array_sum() - calcula a soma dos elementos de um array
$valores = array("10",21,23.5);
$soma = array_sum($valores);
echo "<pre>";
print_r($soma);
echo "</pre>";
echo "<br>";
echo "<hr>";


//explode("/", "20/01/2001)" — 
//Divide uma string em strings
$data = "30/01/2022";
$vetorData = explode("/",$data);
echo "<pre>";
print_r($vetorData);
echo "<pre>";
echo "<br>";
echo "<hr>";

//implode("-", $array) - 
//transforma array em string
$novaData = implode(",",$vetorData);
echo "<pre>";
print_r($novaData);
echo "</pre>";
echo "<br>";
