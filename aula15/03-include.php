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
        include "03-funcaoexterna.php";
        echo "<h2>Teste da função include</h2>";
        Ola(); //chama função no arquivo externo
        mostraValor(7); //chama função no arquivo externo
    ?>
</div>
</body>
</html>
 