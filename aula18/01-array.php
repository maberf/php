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
        $n = array(3,5,8,2);
        $n[] = 7;
        print_r($n);
        echo"</br>";

        $c= range(5,15,2);
        print_r($c);
        echo"</br>";
        foreach ($c as $v) {
            echo "$v ";
        }

    ?>
</div>
</body>
</html>
 