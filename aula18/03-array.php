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
    //índices personalizados
    //atribui índice e valor
    //não precisa ser em ordem
        $v= array( 3=>"A",
                   1=>"D",
                   0=>"B",
                   7=>"C");
    //insere depois do último
        $v[]="E";
        print_r($v);
    ?>   
    </pre>
</div>
</body>
</html>
 