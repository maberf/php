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
    $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
    $idade = date("Y") - $ano; //Y ano no formato XXXX.
    echo "Você nasceu em $ano e tem $idade anos.</br>";
    /*estrutura com condições aninhadas*/
    if ($idade < 16) {
      $voto = "não pode votar";
    }
    else {
      if ($idade >= 16 && $idade < 18 || $idade > 65) {
        $voto = "pode votar";
      }
      else {
        $voto = "deve votar";
      }
    }
    echo "Você $voto.";
  ?>
   <a href="01-condicao.html">Voltar</a>
</div>
</body>
</html>
 