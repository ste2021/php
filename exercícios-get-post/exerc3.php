<?php
// fazendo o php receber os dados do navegador
$vendedor = $_GET['vendedor'];
$venda = $_GET['venda'];
$desconto = ($venda * 0.10);
$icms = ($venda * 0.12);
$comissao = ($venda * 0.05);
// terminar calculo



echo "<p> O valor do desconto obtido pelo cliente é de {$desconto}";
echo "<p> O valor do icms da venda é de {$icms}";
echo "<p> A comissão do vendedor é de {$comissao} <br>";

