<?php
// fazendo o php receber os dados do navegador
$moeda = $_POST['moeda'];
$dolar = 4.77;
define ("TAXA", $taxa);

$conversao = (($moeda/$dolar) * TAXA);

// echo PRECO;
echo "<p> Você tem {$conversao} dólares<br>";

echo "<p> A taxa de câmbio atual é: ". TAXA;