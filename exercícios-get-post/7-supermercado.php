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
    <div class="container">
      <div class="row">
        <div class="col-6">
    <hr>    
        <h1>supermercado da Região</h1>
        <hr>
        <form action="" method="post">
            <h3>Valor da Compra R$: 
            <input type="number" 
            step="0.01" 
            name="compra" 
            value="0.00"></h3>
                <hr>
            <input type="radio" name="cartao" <?php if (isset($cartao)) echo "checked";?> value="">  Pagar com cartão<br>
            <input type="radio" name="entrega" <?php if (isset($entrega)) echo "checked";?> value="">  Entrega domiciliar<br>
            <br>
            <input type="submit" style="font-family: verdana; font-size: 16px" value="Calcular Total">
        </form>
    </body>
    </div>
      </div>
    </div>
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
<!--
7. Um determinado supermercado de nossa região oferece um desconto de 5% sobre o valor 
total da compra de determinado cliente, no caso deste cliente efetuar o pagamento com cartão. 
Também, o supermercado oferece o serviço de entrega domiciliar da compra. Neste caso, o 
supermercado cobra um percentual de 2% sobre o valor da compra, para a entrega no domicílio. 
Elabore um formulário em HTML5 que contenha os campos descritos na situação acima. Em 
seguida, crie um script em PHP que receba os dados deste formulário e calcule e mostre ao 
usuário o valor final da compra, levando-se em consideração o pagamento com cartão e a 
entrega domiciliar. Utilize elementos botões de rádio no formulário para permitir ao usuário 
introduzir as informações relacionados a pagamento com cartão e entrega da compra a 
domicílio.
-->