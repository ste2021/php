<?php

//superglobais
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

//Variáveis superglobais disponíveis no PHP

//$GLOBALS
//Utilizada para acessar qualquer variável global do script PHP
//armazena todas as variáveis globais em um array ($GLOBALS).

$var1 = 10;
$var2 = 20;

function media(){
    //echo ($var1 + $var2) /2;
    echo ($GLOBALS['var1'] + $GLOBALS['var2'])/2; 
}

media();
echo "<hr>";

//$_SERVER

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

