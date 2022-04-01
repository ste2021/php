<?php

//funções string

//strtoupper
$variavel = "qualquer coisa";
echo $variavel."<br>";
echo strtoupper($variavel)."<br>";
echo "<hr>";

//strtolower
$variavel = "COISA";
echo $variavel."<br>";
echo strtolower($variavel)."<br>";
echo "<hr>";

//substr
$variavel = "Julio Cesar de Lemos";
echo $variavel."<br>";
echo substr($variavel,6)."<br>";
echo substr($variavel,6,5)."<br>";
echo "<hr>";

//str_pad
$variavel = "11";
echo $variavel."<br>";
echo str_pad($variavel,10,'-')."<br>";
echo str_pad($variavel,10,'0', STR_PAD_LEFT)."<br>";
echo str_pad($variavel,10,'-', STR_PAD_RIGHT)."<br>";
echo str_pad($variavel,10,'-', STR_PAD_BOTH)."<br>";


echo "<hr>";
