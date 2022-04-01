<?php
//for
for( $i=0; $i<=10; $i++):
    echo "i = $i <br>";
endfor;
echo "<hr>";

//foreach
$bandeira = array("Verde", "Amarelo", "Azul", "Branco");

foreach($bandeira as $valor):
    echo $valor."<br>";
endforeach;
echo "<hr>";

foreach($bandeira as $chave => $valor):
    echo $chave." - ".$valor."<br>";
endforeach;
echo "<hr>";








