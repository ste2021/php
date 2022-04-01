<?php
//CONSTANTES
define("NOME","JULIO LEMOS");
define("ALTURA",1.7);

echo "Meu nome é ".NOME. ' e tenho '.ALTURA.' de altura'.'<br>';

echo "<hr>";

//CONSTANTE COM VALORES (arrays)
define("TIMES", ['corinthians','palmeiras', 'são paulo']);

echo "Eu torço para o ".TIMES[0];
echo "<br>";

//escopo da constante é GLOBAL
function exibirNome(){
    echo NOME.'<BR>';
}

exibirNome();