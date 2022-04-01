<?php

$valor = 15;
if($valor == 10):
    echo "Valor é igual a 10.";
elseif ($valor == 11):
    echo "Valor é igual a 11.";
else:
    echo "Valor é diferente de 10.";
endif;

echo "<hr>";

//operador ternario

echo ($valor == 10)?"valor é igual a 15" : "valor diferente";
echo "<hr>";

//switch case
$bebida = "cerveja";

switch ($bebida):
    case "cerveja":
        echo "Sua bebida preferida é cerveja";
        break;
    case "vodka":
        echo "Sua bebida preferida é vodka";
        break;
    case "campari":
        echo "Sua bebida preferida é campari";
        break;
    default:
        echo "Sua bebida preferida não é cerveja, vodka, campari";
endswitch;  














