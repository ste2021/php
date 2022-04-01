<?php
/*
============================================================
SANITIZAÇÃO - Filters Sanitize
"limpar as variáveis"
----------

FUNÇÕES: (filter_input - filter_var)
FILTER_sanitize_ESPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_sanitize_EMAIL
FILTER_sanitize_URL
============================================================
*/

if(isset($_POST['enviar-formulario'])):

    $erros = array();
    //Sanitize
    //$nome = $_POST['nome']."<br>";
    //echo "$nome"."<br>";
    //$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    //echo "$nome"."<br>";

    //fazer para as demais variáveis (idade, email, url)

    if(!empty($erros)):
        foreach ($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Dados validados com sucesso!!!";
    endif;

endif;
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validções de Formulário</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nome    <input type="text" name="nome"> <br>
        Idade   <input type="text" name="idade"> <br>
        Email   <input type="text" name="email"> <br>
        URL     <input type="text" name="url"> <br>

        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>