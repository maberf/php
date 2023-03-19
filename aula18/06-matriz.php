<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
</head>
<body>
<div>
    <pre>
    <?php
        $m= array( array(6,4),
                   array(4,9),
                   array(3,2));
    //troca o 4 por 3
        $m[0][1]=$m[2][0];
        print_r($m);
    
    ?>   
    </pre>
</div>
</body>
</html>
 