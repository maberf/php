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
        $v= array( 3=>"A",
                   1=>"D",
                   0=>"B",
                   7=>"C");
    //retira elemento
        unset($v[0]);
        print_r($v);
    ?>   
    </pre>
</div>
</body>
</html>
 