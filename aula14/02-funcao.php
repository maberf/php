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
        function soma () {
            $p = func_get_args(); //valor
            $t = func_num_args(); //índice
            $s = 0;
            //varre e incrementa o vetor
            for ($i=0; $i<$t; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
    $r = soma (7, 9, 23);
    echo "Soma dos valores é igual a $r.";
    ?>
</div>
</body>
</html>
 