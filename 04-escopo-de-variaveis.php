<?php
//ESCOPO GLOBAL
$nome = "JULIO LEMOS";

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
/////////////////////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "Araras";
    echo $cidade."<br>";
}

exibeCidade();

echo $cidade;
echo "<hr>";
/////////////////////////////////////////
//escopo GLOBAL
$a = 10;
$b = 20;
$c = 30;

function soma(){
    //echo $a + $b +$c;
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();