<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Supermercado Da Região</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <hr>    
        <h1>supermercado da Região</h1>
        <hr>
        <form action="" method="post">
            <h3>Valor da Compra R$: <input type="number" step="0.01" name="compra" value="0.00"></h3>
            <hr>
            <input type="checkbox" name="cartao" value="cartao">
            <label for="cartao"> Pagar com cartão</label><br><br>
            <input type="checkbox" name="entrega" value="entrega">
            <label for="entrega"> Entrega a Domicilio</label><br>
            <br>
            <input type="submit" style="font-family: verdana; font-size: 16px" value="Calcular Total">
        </form>
    </body>
<!--
8. Repita o exercício anterior, alterando a interface gráfica para que o formulário apresente 
botões de checkbox (ao invés de botões de rádio) ao usuário, de forma a se obter as informações 
relacionados a pagamento com cartão e entrega domiciliar.
-->
</html>
<?php

    echo "<hr>";
    error_reporting(0);
    $compra = $_POST['compra'];


    $usocartao = $_POST['cartao'];
    $usoentrega = $_POST['entrega'];

    
    if ($compra):
        if (isset($usocartao)):
            $cartao = ($compra * 0.05 );
        else:
            $cartão = 0;
        endif;
        if (isset($usoentrega)):
            $entrega = ($compra * 0.02);
        else:
            $entrega = 0;
        endif;
    else:
        echo "Digite o Valor da Compra.";
    endif;
    
    echo "<hr>";

    $compra = $compra - $cartao + $entrega;

    
    echo "<h2> Valor total da compra:: ".number_format($compra,2,',','.')."</h2>";

?>