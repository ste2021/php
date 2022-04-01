<?php

/*
    number_format
    round
    ceil
    floor
    rand
*/

//number_format
$varSemFormatacao = 1234567.89;
$varComFormatacao = number_format($varSemFormatacao,2,",",".");
echo "O valor é de R$ $varComFormatacao";
echo "<hr>";

//round
$variavel = 5.4;  //5.5
echo round($variavel);
echo "<hr>";

//ceil (arredonda p cima)
$variavel = 5.1;  
echo ceil($variavel);
echo "<hr>";

//floor (arredonda p baixo)
$variavel = 5.99;  
echo floor($variavel);
echo "<hr>";

//rand (números randômicos)
$variavel = rand(1,50);  
echo $variavel;
echo "<hr>";