<?php
// fazendo o php receber os dados do navegador
$fahrenheit = $_GET['fahrenheit'];

//  calculo

$celsius = (($fahrenheit - 32) * 5/9);


echo "<p> A temperatura em celsius é {$celsius}";


