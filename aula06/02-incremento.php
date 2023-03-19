<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       /* operadores de pré e pós incremento e decremento */
       $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
       echo "O ano atual e $atual e o ano anterior é " .$atual--; //erro
       echo "</br>O ano atual é $atual e o ano anterior é " .--$atual;
       echo "</br>O ano atual é $atual e o ano seguinte é " .$atual++; //erro
       echo "</br>O ano atual é $atual e o ano seguinte é " .++$atual;
    ?>
</div>
</body>
</html>
 