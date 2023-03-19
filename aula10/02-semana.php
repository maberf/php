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
    $ds = isset($_GET["ds"])?$_GET["ds"]:0;
    switch ($ds) {
      case 1:
        echo "Coçar o saco! :)";
      break;
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Trabalho e estudo! :)";
      break;
      case 7:
        echo "Coçar o saco! :)";
    }
  ?>
  <!--técnica de retorno com javascript-->
   <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 