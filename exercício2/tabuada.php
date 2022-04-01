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
    <title>Tabuada</title>
</head>
<body>
<div class="container">
      <div class="row">
        <div class="col-6">
       
        <form action="" method="get">
        <fieldset>
            <legend>
               Calcule a Tabuada
            </legend>
            <div class="form-group">
                <label class="form-label">
                    Digite um Número:</label>
                <input 
                type="number" 
                name="valor"
                id="valor"
                placeholder="Digite um número"
                > <br>
            </div>
           
            <div class="form-group text-center">
            <button class="btn btn-primary" type="submit" name="enviar-formulario">Enviar</button>
            </div>
        </fieldset>
        </form>
    </div>
    <div class="col-2">
    
    </div>
   
    </div>      
    </div>

</body>
</html>
<?php
    if(!empty($_GET["valor"])) {
      $valor = $_GET["valor"];
      for($i=1; $i<=10; $i++){
        $resp = $valor * $i;
        echo $valor." x ".$i." = ".$resp."<br />";
      }
    }
  ?>