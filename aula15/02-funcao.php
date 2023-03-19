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
    //passagem por REFERÊNCIA - ALTERA $a
        function teste (&$x) {
            $x = $x + 2;
            echo "x = $x <br>";
        }
    $a = 3;
    teste ($a);
    echo "a = $a";
    ?>
    
</div>
</body>
</html>
 