<!--
10. Determinada rede de farmácias de nossa cidade concede um desconto na compra de 
medicamentos a seus clientes idosos, de acordo com a situação abaixo:
✓ Clientes com menos de 55 anos não têm nenhum desconto;
✓ Clientes entre 55 anos e 70 anos (inclusive) obtêm 5% de desconto sobre o valor da 
compra;
✓ Clientes acima de 70 anos ganham 7% de desconto sobre o valor da compra.
Além disso, se o pagamento for feito por meio de cartão de fidelidade da rede, tem-se um 
desconto adicional de mais 5% em relação aos descontos anteriores, isto é: cliente entre 55 anos 
e 70 anos, que pagou com cartão, terá um desconto total sobre a compra de 10%. Cliente acima 
de 70 anos, pagando com cartão, terá desconto de 12%.
Crie uma aplicação web por meio da linguagem PHP que permita a um vendedor fornecer, em 
um formulário HTML5, as informações acima sobre a compra de determinado cliente. Em 
seguida, o script em PHP deverá mostrar o valor final da despesa a ser paga pelo cliente.
-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Farmacia Popular</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <hr>    
        <h1>Farmacia Popular</h1>
        <hr>
        <form action="" method="post">
            <h3>Valor da Compra R$: <input type="number" step="0.01" name="compra" value="0.00"></h3>
            <hr>
            <input type="radio" name="idade" <?php if (isset($idade)) echo "checked";?> value="55" checked> Menores de 55 anos<br>
            <input type="radio" name="idade" <?php if (isset($idade)) echo "checked";?> value="70"> Entre 55 e 70 anos<br>
            <input type="radio" name="idade" <?php if (isset($idade)) echo "checked";?> value="idoso"> 71 anos ou mais <br>
            <input type="checkbox" name="rede" value="">
            <label for="rede"> Pagar com cartão Fidelidade</label><br>
            <br>
            <input type="submit" style="font-family: verdana; font-size: 16px" value="Calcular Total">
        </form>
    </body>
</html>
<?php
    echo "<hr>";
    error_reporting(0);
    $compra = $_POST['compra'];


    $idade= $_POST['idade'];
    $rede = $_POST['rede'];

    
    if ($compra):
        if (isset($idade) && ($idade == '55')):
            $desconto1 = 0;
        elseif(isset($idade) && ($idade == '70')):
            $desconto1 = ($compra * 0.05);
        elseif(isset($idade) && ($idade == 'idoso')):
            $desconto1 = ($compra * 0.07);
        endif;
        if (isset($rede)):
            $desconto2 = ($compra * 0.05 );
        else:
            $desconto2 = 0;
        endif;
    else:
        echo "Digite o Valor da Compra.";
    endif;
    // valor final da compra.
    $compra = $compra - ($desconto1 + $desconto2);

    echo "<hr>";
    
    echo "<h2> Valor total da compra:: ".number_format($compra,2,',','.')."</h2>";

?>
