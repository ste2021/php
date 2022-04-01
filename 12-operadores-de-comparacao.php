<?php

//operadores de comparação

if(1 == 1):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

if(1 == "1"):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

//operador de identidade
if(1 === "1"):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

if(1 != 2):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

if(1 != '1' ):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

if(1 !== '1' ):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

if(1 <> '1' ):
    echo "Sim";
else:
    echo "Não";
endif;

echo "<hr>";

/*

<
>
<=
>=

*/

if (10 <= 11):
    echo "sim";
else:
    echo "não";
endif;
echo "<hr>";
//operador nave-ship      <=>
//3 ´possíveis valores

var_dump(20 <=> 30); //primeiro parâmetro for < segundo parâmetro (-1)
var_dump(20 <=> 20); //primeiro parâmetro for = segundo parâmetro (0)
var_dump(30 <=> 20); //primeiro parâmetro for > segundo parâmetro (1)