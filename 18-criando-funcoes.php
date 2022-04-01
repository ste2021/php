<?php
//funções

function mensagem($msg){
    echo $msg."<br>";
}

mensagem("Hello World");
echo "<hr>";

function formataReal($var){
    echo "R$ ".number_format($var,2,",",".")."<br>";
}

formataReal(152.522);

