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
    $num = isset($_GET["num"])?$_GET["num"]:0;
    $oper = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($oper) {
      case 1:
        $res = $num * 2;
      break;
      case 2:
        $res = $num ** 3;  // $num ^ 3 é errado!
      break;
      case 3:
        $res = sqrt($num);  // poderia ser $num ^ (1/2);
    }
    echo "Resultado da operação: <span class='foco'>$res</span>";
  ?>
   <a href="01-calculador.html" class="botao">Voltar</a>
</div>
</body>
</html>
 