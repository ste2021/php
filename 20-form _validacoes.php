<?php
/*
============================================================
VALIDAÇÕES
----------

FUNÇÕES: (filter_input - filter_var)
FILTER_VALIDADE_INT
FILTER_VALIDADE_EMAIL
FILTER_VALIDADE_FLOAT
FILTER_VALIDADE_IP
FILTER_VALIDADE_URL
============================================================
*/

if(isset($_POST['enviar-formulario'])):
    //echo "Enviou <br>";
    //var_dump($_POST);
    //$idade = $_POST['idade'];
    $erros = array();

    //filter_input 1º-tipo do input, 2º name html, qual validação
    if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)):
       $erros[] = "Idade precisa ser um inteiro";
    endif;

    if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDADE_EMAIL)):
        $erros[] = "Coloque um e-mail válido! ";
     endif;

     if(!$IP = filter_input(INPUT_POST,'peso',FILTER_VALIDADE_IP)):
        $erros[] = "Peso inválido! Digite novamente... ";
     endif;

     if(!$IP = filter_input(INPUT_POST,'ip',FILTER_VALIDADE_FLOAT)):
        $erros[] = "IP inválido! Digite novamente... ";
     endif;

     if(!$URL = filter_input(INPUT_POST,'URL',FILTER_VALIDADE_FLOAT)):
        $erros[] = "URL inválida! Digite novamente...";
     endif;

    //fazer para os demais inputs (email, peso, ip, url)

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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Validações de Formulário</title>
</head>
<body>
    <div class="container">
    <div class="col-2"></div>
      <div class="col-8">
       
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>
                Cadastro
            </legend>
            <div class="form-group">
            Idade   <input type="text" name="idade"> <br>
            </div>
            <div class="form-group">
            Email   <input type="email" name="email"> <br>
            </div>
            <div class="form-group">
            Peso    <input type="text" name="peso"> <br>
            </div>
            <div class="form-group">
            IP      <input type="text" name="ip"> <br>
            </div>
            <div class="form-group">
            URL     <input type="text" name="url"> <br>
            </div>
            <div class="form-group text-end">
            <button class="btn-primary" type="submit" name="enviar-formulario">Enviar</button>
            </div>
        </fieldset>
        </form>
        </div>
        
    </div>

</body>
</html>