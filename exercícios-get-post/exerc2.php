<?php
// fazendo o php receber os dados do navegador
$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];
$preco = $_POST['preco'];
define ("PRECO", $preco);

$custo_total = (($distancia/$consumo )* PRECO);
$total_litros = (($custo_total/ PRECO));



// echo PRECO;
echo "<p> O gasto que terá com a viagem será de {$custo_total}";

echo "<p> O total de litros gastos na viagem será de : {$total_litros} ";

echo "<p> O preço pago por litro na viagem foi de : ". PRECO;