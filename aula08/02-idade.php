<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
</head>
<body>
<div>
  <?php
    /*isset testa se foi informado o valor pelo HTML*/
    $nome = isset($_GET["tNome"])?$_GET["tNome"]:"[não informado]";
    $ano = isset($_GET["tNasc"])?$_GET["tNasc"]:1800; //ano default
    $sexo = isset($_GET["tSexo"])?$_GET["tSexo"]:"[não informado]";
    $idade = date("Y") - $ano; //Y traz ano no formato XXXX.
    echo "$nome é $sexo e tem $idade anos.";
  ?>
   <a href="02-formulario.html">Voltar</a>
</div>
</body>
</html>
 