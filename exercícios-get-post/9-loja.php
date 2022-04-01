<!-- 
9. Uma certa loja do centro de nossa cidade oferece a possibilidade de pagamento à vista ou a 
prazo. Se o cliente escolher o pagamento à vista, a loja concede um desconto de 5% sobre o 
valor da compra. Se o pagamento for a prazo, o valor da compra sofre um acréscimo de 2%. 
Também, há a possibilidade de se utilizar pagamento com cartão com a bandeira Visa. Neste 
3
caso, o cliente estará automaticamente concorrendo ao sorteio de um automóvel, oferecido 
pela loja. Tendo em vista estas informações, elaborar um formulário em HTML5 que contenha:
✓ Um campo para o usuário fornecer o valor da compra de determinado cliente;
✓ Botões de rádio para indicar se o pagamento será feito à vista ou a prazo;
✓ Um checkbox para indicar se o pagamento será feito com cartão Visa.
Após isso, criar um script em PHP que receba os dados deste formulário. Ao final do script, 
a aplicação deverá:
a) Mostrar ao usuário da aplicação o valor final da compra;
b) Mostrar ao usuário se o cliente está apto a participar do sorteio ou não.
-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lojao</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <hr>    
        <h1>Loja do Centro</h1>
        <hr>
        <form action="" method="post">
            <h3>Valor da Compra R$: <input type="number" step="0.01" name="compra" value="0.00"></h3>
            <hr>
            <input type="radio" name="pagamento" <?php if (isset($pagamento)) echo "checked";?> value="avista">  À Vista<br>
            <input type="radio" name="pagamento" <?php if (isset($pagamento)) echo "checked";?> value="aprazo">  Á Prazo<br>
            <input type="checkbox" name="visa" value="">
            <label for="entrega"> Pagar com cartão VISA</label><br>
            <br>
            <input type="submit" style="font-family: verdana; font-size: 16px" value="Calcular Total">
        </form>
    </body>
</html>
<?php
    echo "<hr>";
    error_reporting(0);
    $compra = $_POST['compra'];


    $pagamento= $_POST['pagamento'];
    $visa = $_POST['visa'];

    
    if ($compra):
        if (isset($pagamento) && ($pagamento == 'avista')):
            $compra = ($compra - ($compra * 0.05 ));
        elseif(isset($pagamento) && ($pagamento == 'aprazo')):
            $compra = ($compra + ($compra * 0.02));
        else:
            echo "Escolha a forma de pagamento!!!<br>";
        endif;
        if (isset($visa)):
            echo "Você está concorrendo ao sorteio de um carro 0 km!!!";
        else:
            echo "Você não está inscrito no sorteio! Faça seu cartão VISA para concorrer!!!";
        endif;
    else:
        echo "Digite o Valor da Compra.";
    endif;
    
    echo "<hr>";
    
    echo "<h2> Valor total da compra:: ".number_format($compra,2,',','.')."</h2>";

?>
