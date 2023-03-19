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
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }
    soma (3,4);
    soma (8,2);
    $x = 10;
    $y = 18;
    soma ($x, $y);
    ?>
    
</div>
</body>
</html>
 