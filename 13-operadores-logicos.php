<?php
/*
Operadores lógicos
e (&& - and)
ou (|| - or)
ou exclusivo (xor) quando apenas 1 expressão for verdadeira
negação (!)

*/
$comida = "pizza";
$bebida = "cerveja";

if( ($comida == "pizza") xor ($bebida == "cerveja")):
    echo "VERDADEIRO";
else:
    echo "FALSO";
endif;
