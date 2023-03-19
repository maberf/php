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
    $valor = $_GET["v"];
    $raiz = sqrt($valor);
    echo "A raiz de $valor é ".number_format($raiz,2).".";
  ?>
  <a href="01-formulario.html">Voltar</a>
</div>
</body>
</html>
 